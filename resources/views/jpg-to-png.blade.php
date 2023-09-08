@extends('layouts.app')
@section('content')
@section('title', 'Jpg to Png')
<style>
    #header {
        background-color: #0ea2bd;
    }

    #uppy-Dashboard-inner {
        width: 100% !important;
    }
</style>
<section class="JpgtoPngSection mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center convertjpgtopdf_main">
                    <h1 class="convertjpgtopdf">JPG to PNG</h1>
                    <h2 class="bestjpgtopdf">Convert JPG images to PNG in seconds. Easily adjust orientation and
                        margins.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pt-3">
                <div id="uppy"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding section-bg mt-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h3 class="mb-4">How to convert JPG to PNG.</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-3 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2">Select</h5>
                                <p class="mb-0">Choose a JPG image from your photo library that is less than 2GB in
                                    size.</p>
                            </div>
                            <span class="badge bg-finance rounded-pill ms-auto">1</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-3 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2"> Convert</h5>
                                <p class="mb-0">Upload your image to automatically convert it to PNG format in an
                                    instant.</p>
                            </div>
                            <span class="badge bg-finance rounded-pill ms-auto">2</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-3 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2">Download</h5>
                                <p class="mb-0">Your new image will download as a PNG file. Save it, share it, or keep
                                    editing to make it your own.</p>
                            </div>
                            <span class="badge bg-finance rounded-pill ms-auto">3</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="topics-detail-section section-padding" id="topics-detail">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <h3 class="mb-4 text-center">About JPG To PNG</h3>
                <p>Converting JPG to PNG is a common image file format transformation. JPG (Joint Photographic Experts Group) and PNG (Portable Network Graphics) are both popular image formats, but they serve different purposes and have distinct characteristics.
                </p>
                <p><strong>JPG is a lossy compression format primarily </strong>.used for photographs and images with a wide range of colors and details. It achieves high compression ratios by discarding some image data, resulting in smaller file sizes but a slight loss in image quality with each compression.</p>
                <p>PNG, on the other hand, is a lossless compression format suitable for images with sharp edges, transparency, and limited colors. It retains all image data and offers excellent quality but usually results in larger file sizes compared to JPG.
                </p>
                {{-- <div class="row my-4">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images/businesswoman-using-tablet-analysis.jpg" class="topics-detail-block-image img-fluid">
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                        <img src="images/colleagues-working-cozy-office-medium-shot.jpg" class="topics-detail-block-image img-fluid">
                    </div>
                </div> --}}
                <p>When converting from JPG to PNG, you are essentially changing the image format from a lossy to a lossless one. This conversion can be useful in scenarios where preserving image quality is paramount, especially when working with graphics, logos, or images with transparency. However, it's important to note that converting from JPG to PNG won't magically improve the image quality if the original JPG was already heavily compressed or of low quality. It will only prevent further degradation during subsequent editing or sharing.
                </p>
                <blockquote>
                    Freelancing your skills isn’t going to make you a millionaire overnight.
                </blockquote>
            </div>

        </div>
    </div>
</section>

<div id="preloader"></div>
<script type="module">
    // https://releases.transloadit.com/uppy/v3.13.1/uppy.min.mjs
    // import { Uppy, Dashboard } from "https://releases.transloadit.com/uppy/v3.13.1/uppy.min.mjs";

    import { Uppy, Dashboard } from "{{ asset('assets/js/uppy.js') }}";
    const uppy = new Uppy({
        restrictions: {
            maxNumberOfFiles: 15,
            allowedFileTypes: ['.jpg'],
        },
        autoProceed: false,   // hey 
        debug: true,
    });

    uppy.use(Dashboard, {
        inline: true,
        target: '#uppy',
    });

    let uploadedFiles = [];
    uppy.on('file-added', (file) => {
        const existingFileIndex = uploadedFiles.findIndex(existingFile => existingFile.name === file.name);
        if (existingFileIndex !== -1) {
            uppy.removeFile(uploadedFiles[existingFileIndex].id);
            uploadedFiles.splice(existingFileIndex, 1);
        }
        uploadedFiles.push(file);
    });

    uppy.on('restriction-failed', (file, error) => {
        window.alert('Maximum of 15 files allowed.');
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
            loaderOverlay.style.display = 'none';
        }
        uploadedFiles = successfulUploads;
    });

    function convertToPNG(image) {
        return new Promise((resolve) => {
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            const img = new Image();
            img.onload = () => {
                canvas.width = img.width;
                canvas.height = img.height;
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
        link.download = 'lovely_img.zip';
        link.click();
        URL.revokeObjectURL(url);
        location.reload();
    }
</script>
@endsection
