import { Uppy, Dashboard } from "https://releases.transloadit.com/uppy/v3.13.1/uppy.min.mjs";

    const uppy = new Uppy({
        restrictions: {
            maxNumberOfFiles: 15,
            allowedFileTypes: ['.jpg'],
        },
        autoProceed: false,
        debug: true,
    });

    uppy.use(Dashboard, {
        inline: true,
        target: '#uppy',
    });




    




    uppy.on('restriction-failed', (file, error) => {

      window.alert('Maximum of 15 files allowed.');
        // toastr.error('Maximum of 15 files allowed.');
    });
  uppy.on('complete', async (result) => {
  const loaderOverlay = document.getElementById("preloader");
  loaderOverlay.style.display = 'block'; 

  const successfulUploads = result.successful;
  try {
    const convertedImages = await processAndConvertImages(successfulUploads);
    const zipBlob = await createZipFolder(convertedImages);
    downloadZipFolder(zipBlob, () => {
      loaderOverlay.style.display = 'none'; 
    
    });
  } catch (error) {
    console.error('Error processing images or creating ZIP:', error);
    loaderOverlay.style.display = 'none'; // Hide loader overlay in case of error
  }
});

    function convertToPNG(image) {
        return new Promise((resolve) => {
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            const img = new Image();
            img.onload = () => {
                canvas.width = img.width;
                canvas.height = img.height;


                // ctx.clearRect(0, 0, canvas.width, canvas.height);

                ctx.drawImage(img, 0, 0, img.width, img.height);
                canvas.toBlob((blob) => resolve(blob), 'image/png');
            };
            img.src = URL.createObjectURL(image.data);
        });
    }
    
    async function processAndConvertImages(successfulUploads) {
        const convertedImages = [];
        for (const file of successfulUploads) {
            try {
                const pngBlob = await convertToPNG(file);
                convertedImages.push({
                    name: file.name.replace(/\.[^/.]+$/, '.png'),
                    data: pngBlob
                });
            } catch (error) {
                console.error('Error converting image to PNG:', error);
            }
        }
        return convertedImages;
    }
    async function createZipFolder(convertedImages) {
        const zip = new JSZip();
        for (const image of convertedImages) {
            zip.file(image.name, image.data);
        }
        return zip.generateAsync({
            type: 'blob'
        });
    }

    function downloadZipFolder(zipBlob, callback) {
        const url = URL.createObjectURL(zipBlob);
        const link = document.createElement('a');
        link.href = url;
        link.download = 'lovely_images.zip';
        link.click();
        URL.revokeObjectURL(url);
        location.reload();
    }