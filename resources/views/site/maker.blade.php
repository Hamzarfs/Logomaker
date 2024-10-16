    <!-- resources/views/site/main.blade.php -->
    @extends('site.common')

    @section('title', 'Free Logo Maker Tool for Every Business - RFS Logo Design')
    @section('meta_desc', 'Use our free logo maker tool for creating custom business logos. With powerful logo generator, design logos in minutes with a variety of templates, fonts and icons')
    @section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <style>
            /* body {
                                                font-family: Arial, sans-serif;

                                            } */

            .col-md-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
                border-radius: 10px;
                padding:

            }

            .font-label {
                font-weight: bold;
            }

            .main-section {
                background-color: #E9EDFF;
                padding: 20px;
                margin-bottom: 20px;
            }

            .custom-button-maker,
            .action-button {
                padding: 10px;
                border-radius: 5px;
                color: #fff;
                background-color: #646BD9;
                font-size: 15px;
                font-weight: 700;
                line-height: 24px;
                text-align: center;
                border-color: #646BD9;
                margin-top: 20px;
            }

            .btn-danger {
                padding: 10px;
                border-radius: 5px;
                color: #fff;
                background-color: red;
                font-size: 15px;
                font-weight: 700;
                line-height: 24px;
                text-align: center;
                border-color: red;
                margin-top: 20px;
            }

            #text-section {
                margin-top: 20px;
            }

            .font-item {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100px;
                width: 100%;
                border: 2px solid rgb(255, 255, 255);
                margin-bottom: 10px;
                cursor: pointer;
                border-radius: 5px;
                background-color: white;
                transition: box-shadow 0.9s ease;
                /* Smooth transition for box-shadow */
            }

            .font-item:hover {
                box-shadow: 0 4px 8px rgba(46, 46, 46, 0.1);
                /* Box shadow on hover */
                border: 2px solid rgb(0, 0, 0);

            }

            .font-sample {
                font-size: 1.5em;
            }

            .selected {
                background-color: #6a70d6 !important;
                color: white;
            }

            footer {
                background-color: white;
                padding: 20px 0;

            }

            .btn-back {
                background: none;
                border: none;
                color: black;
                font-size: 1.1em;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .btn-back i {
                margin-right: 5px;
            }

            .btn-skip {
                width: 10%;
            }

            .button-container {
                display: flex;
                justify-content: center;
                gap: 20px;
            }

            /* custom css for editor */

            /* @font-face {
                                        font-family: 'Roboto';
                                        src: url('fonts/Roboto-Regular.ttf') format('truetype');
                                    }

                                    @font-face {
                                        font-family: 'Open Sans';
                                        src: url('fonts/OpenSans-Regular.ttf') format('truetype');
                                    }

                                    @font-face {
                                        font-family: 'Lato';
                                        src: url('fonts/Lato-Regular.ttf') format('truetype');
                                    }

                                    @font-face {
                                        font-family: 'Montserrat';
                                        src: url('fonts/Montserrat-Regular.ttf') format('truetype');
                                    }

                                    @font-face {
                                        font-family: 'Poppins';
                                        src: url('fonts/Poppins-Regular.ttf') format('truetype');
                                    } */

            #logo-canvas {
                border: 1px solid #ddd;
            }

            .color-picker-container {
                margin-bottom: 10px;
            }

            .color-picker-container label {
                display: block;
            }

            .highlighted {
                background-color: #f0f0f0;
            }

            .font-preview {
                display: block;
                font-size: 14px;
                margin: 2px 0;
            }

            .btn-group {
                margin-bottom: 10px;

            }

            .text-effects label {
                margin-right: 15px;
            }

            .font-label {
                margin-top: 2px;
            }

            /* Container for color pickers to ensure they stay in one row or adjust to space */
            .colorPickerContainer {
                display: flex;
                /* Align color pickers in a row */
                flex-wrap: wrap;
                /* Allow wrapping if there's not enough space */
                gap: 10px;
                /* Space between color pickers */
            }

            /* Individual color picker style */
            .colorPicker {
                width: 50px;
                /* Set a fixed width for each color picker */
                height: 40px;
                /* Set a fixed height for color pickers (adjust as needed) */
                padding: 0%;
                border: 1px;

            }

            .form-control {
                display: inline-block;
                margin-bottom: 5px;
            }

            .upper-canvas {
                /* Default styles */
                width: 100%;
                height: auto;
                /* Adjust height according to content */
                max-width: 1200px;
                /* Set a maximum width for larger screens */
                margin: 0 auto;
                /* Center align the canvas */
            }

            /* New Toolbar Style */

            .sidebar {
                height: auto;
                width: 250px;
                /* position: fixed; */
                top: 0;
                left: 0;
                background-color: #343a40;
                padding: 20px;
                color: #fff;
                /* margin-bottom: -50px */
            }

            .sidebar .btn {
                width: 100%;
                margin-bottom: 10px;
                background-color: #495057;
                color: #fff;
                border: none;
            }

            .sidebar .btn:hover {
                background-color: #6c757d;
            }

            .sidebar .form-check,
            .sidebar .form-group {
                margin-bottom: 15px;
            }

            .colorPickerContainer {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .colorPickerContainer label {
                margin-right: 10px;
            }

            .content {
                margin-left: 270px;
                padding: 20px;
            } 

            .btn-danger {
                background-color: #dc3545;
                border: none;
            }

            .btn-danger:hover {
                background-color: #c82333;
            }

            canvas.upper-canvas {
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0.1) 1px, transparent 1px), linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
                background-size: 20px 20px;
                background-repeat: repeat;
                z-index: 10;
            }


            /* responsive start */

            .mobilebar {
            display: flex;
            flex-direction: column; /* Stack items vertically */
            gap: 15px; /* Space between items */
            margin-right: 30px;
            max-width: 100%; /* Maximum width for the sidebar */
            margin: auto; /* Center the sidebar */
            border-radius: 10px; /* Rounded corners for sidebar */
            padding-top:15px;
            padding-bottom:15px;
           

        }

        .mobilebar .mobile-button-row {
            padding-left:15px;
            padding-right:5px;
            
            display: flex; /* Row layout for buttons */
            justify-content: space-between; /* Evenly space buttons */
            gap: 10px; /* Space between buttons */
        }

        .mobilebar .mobile-btn, 
        .mobilebar .mobile-form-check, 
        .mobilebar .mobile-form-group {
            margin: 0; /* Remove default margin for uniform spacing */
            width: 100%; /* Full width for form groups and inputs */
        }

        .mobilebar .mobile-btn {
            display: flex;
            align-items: center;
            justify-content: center; /* Center button text and icons */
            padding: 10px; /* Padding for buttons */
            background-color: #343A40; /* Primary button color */
            color: white; /* Button text color */
            border: none; /* Remove default border */
            border-radius: 5px; /* Rounded button corners */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Transition effect on hover */
            font-size: 16px; /* Font size */
        }

        .mobilebar .mobile-btn:hover {
            background-color: #6C757D; /* Darker shade on hover */
        }

        .mobile-form-check {
            display: flex;
            align-items: center; /* Center checkbox and label */
            gap: 5px; /* Space between checkbox and label */
            margin-left:25px !important;
        }

        .mobile-form-group {
            display: flex;
            flex-direction: column; /* Stack label and input vertically */
            gap: 5px; /* Space between label and input */
        }

        .colorPickerContainer {
            display: flex; /* Use flexbox for the container */
            justify-content: space-between; /* Space elements evenly */
            gap: 10px; /* Space between color pickers */
        }

        .colorPicker {
            width: 40px; /* Adjust width to fit side by side */
            padding: 0px; /* Padding for color inputs */
            border: 1px solid #ced4da; /* Border color */
            border-radius: 5px; /* Rounded corners */
        }

        /* Style for the input field */
        .mobile-form-control {
            border: 1px solid #ced4da; /* 8px border */
            border-radius: 5px; /* Rounded corners */
            padding: 8px; /* Padding for the input */
            font-size: 16px; /* Font size */
        }
         
        /* Media queries for mobile responsiveness */
        @media (max-width: 480px) {
            .mobilebar {
                width: 100%;
                margin-right: 30px;
            }

            .mobilebar .mobile-btn {
                font-size: 14px; /* Smaller font size for buttons */
                padding: 8px; /* Smaller padding */
            }
        }

            /* responsive end  */
        </style>
        <!----------------------------------------- Banner Section ------------------------------->


        <!-- <div class="container mt-5"> -->
        <div class="container-fluid ps-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="container-custom">

                        <div class="sidebar">
                            <button id="italic-text" class="btn"><i class="fas fa-italic"></i> Italic</button>
                            <button id="bold-text" class="btn"><i class="fas fa-bold"></i> Bold</button>
                            <button id="delete-button" class="btn"><i class="fas fa-trash"></i> Delete</button>
                            <button id="redirect-button" class="btn"><i class="fas fa-redo"></i> Reset All</button>
                            <button id="undo" class="btn"><i class="fas fa-redo"></i> Undo</button>
                            <button id="redo" class="btn"><i class="fas fa-undo"></i> Redo</button>

                            <div class="text-effects">
                                {{-- <div class="form-check">
                                    <input type="checkbox" id="text-curve" class="form-check-input">
                                    <label for="text-curve" class="form-check-label">CurSports & Fitnessve</label>
                                </div> --}}
                                <div class="form-check">
                                    <input type="checkbox" id="text-outline" class="form-check-input">
                                    <label for="text-outline" class="form-check-label">Outline</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="text-shadow" class="form-check-input">
                                    <label for="text-shadow" class="form-check-label">Shadow</label>
                                </div>
                            </div>

                            <div class="form-group colorPickerContainer">
                                <label for="text-color">Text Color</label>
                                <input type="color" id="text-color" class="form-control colorPicker">
                                <label for="background-color">Bg Color</label>
                                <input type="color" id="background-color" class="form-control colorPicker">
                            </div>

                            <div class="form-group">
                                <label for="font-family" class="font-label">Font Family </label>
                                <select id="font-family" class="form-control">
                                    @foreach ($fonts as $font)
                                        <option value="{{ preg_replace('/\.[^.\s]+$/', '', $font->slug) }}"
                                            {{ session()->get('font') == $font->slug ? 'selected' : '' }}
                                            style="font-family: '{{ preg_replace('/\.[^.\s]+$/', '', $font->slug) }}';">
                                            {{ preg_replace('/\.[^.\s]+$/', '', $font->name) }}
                                        </option>
                                    @endforeach
                                </select>

                                <button id="add-text" class="btn"><i class="fas fa-plus"></i> Add Text</button>
                                <input type="text" id="logo-text" class="form-control">
                                <div id="color-palettes" class="mt-3"></div>
                                @guest
                                    <a href="{{ route('login') }}" class="btn mt-5"><i class="fas fa-save"></i> Download</a>
                                @else
                                    @if ($hasOrder)
                                        <button id="save-logo" class="btn mt-5"><i class="fas fa-save"></i> Download</button>
                                    @else
                                        <a href="javascript:void(0)" class="btn mt-5 redirect-to-pckgs-btn"><i
                                                class="fas fa-save"></i> Download</a>
                                    @endif
                                @endguest

                                <button id="save-svg" class="btn btn-primary">Save</button>

                                
                            </div>
                        </div>





                    </div>
                </div>


                <div class="mobilebar" style="display:none">
                    <div class="mobile-button-row">
                        <button id="mobile-italic-text" class="mobile-btn"><i class="fas fa-italic"></i></button>
                        <button id="mobile-bold-text" class="mobile-btn"><i class="fas fa-bold"></i></button>
                        <button id="mobile-undo" class="mobile-btn"><i class="fas fa-arrow-left"></i></button> <!-- Updated icon for Undo -->
                        <button id="mobile-redo" class="mobile-btn"><i class="fas fa-arrow-right"></i></button> <!-- Updated icon for Redo -->
                        <button id="mobile-redirect-button" class="mobile-btn"><i class="fas fa-redo"></i></button>
                        <button id="mobile-delete-button" class="mobile-btn"><i class="fas fa-trash"></i></button>
                    </div>
                    
                    <div class="mobile-button-row">
                                <label for="font-family" class="font-label">Font &nbsp;&nbsp;</label>
                                <select id="mobile-font-family" class="form-control mobile-form-control">
                                    @foreach ($fonts as $font)
                                        <option value="{{ preg_replace('/\.[^.\s]+$/', '', $font->slug) }}"
                                            {{ session()->get('font') == $font->slug ? 'selected' : '' }}
                                            style="font-family: '{{ preg_replace('/\.[^.\s]+$/', '', $font->slug) }}';">
                                            {{ preg_replace('/\.[^.\s]+$/', '', $font->name) }}
                                        </option>
                                    @endforeach
                                </select>
                    </div>

                    <div class="mobile-button-row">
                        <button id="mobile-add-text" class="mobile-btn" style="width: 10%;"><i class="fas fa-plus"></i></button>
                        <input type="text" id="mobile-logo-text" class="mobile-form-control" placeholder="Enter Logo Text" style="width: 90%;">
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="container-custom">

                        <div class="col-md-8">
                            <h1 class="text-center rfs-heading" style="margin-top: 20px;">RFS Logo Editor</h1>
                            <!-- <canvas id="logo-canvas" style="width: 80%; border:red 1px solid; z-index:1000000 !important"></canvas> -->

                            <div class="fabric-canvas-wrapper">
                                <canvas id="logo-canvas"
                                    style="width: 80%; "></canvas>
                            </div>



                        </div>
                    </div>
                </div>
               
                <div class="mobilebar" style="display:none">
                    <div class="text-effects">
                    <div id="mobile-color-palettes" class="mt-3"></div>
                    <div class="mobile-form-check">
                        <input type="checkbox" id="mobile-text-outline" class="mobile-form-check-input">
                        <label for="text-outline" class="mobile-form-check-label">Outline</label>
                        <input type="checkbox" id="mobile-text-shadow" class="mobile-form-check-input">
                        <label for="text-shadow" class="mobile-form-check-label">Shadow</label>
                    </div>
                </div>

                <div class="mobile-form-group colorPickerContainer">
                    <div class="color-picker" style="display: flex; align-items: center; gap: 20px;">
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-paint-brush"></i>
                            <label for="text-color" style="margin: 0 5px;">Text Color:</label>
                            <input type="color" id="mobile-text-color" class="colorPicker">
                        </div>

                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-fill-drip"></i>
                            <label for="background-color" style="margin: 0 5px;">BG Color:</label>
                            <input type="color" id="mobile-background-color" class="colorPicker">
                        </div>
                    </div>
                </div>

                <div class="mobile-button-row">
                                
                              
                                @guest
                                    <a href="{{ route('login') }}" class="btn mt-5"><i class="fas fa-save"></i> Download</a>
                                @else
                                    @if ($hasOrder)
                                        <button id="mobile-save-logo" class="mobile-btn"><i class="fas fa-save" style="margin-right: 5px;"></i> Download</button>

                                    @else
                                    <a href="javascript:void(0)" class="mobile-btn   redirect-to-pckgs-btn"><i
                                    class="fas fa-save"></i> Download</a>

                                    
                                      
                                    @endif
                                @endguest

                    <button id="mobile-save-svg" class="mobile-btn btn-primary"><i class="fas fa-file-download" style="margin-right: 5px;"></i> Save</button>
                </div>
                
                </div>

                <br> 
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            
            document.getElementById('redirect-button').addEventListener('click', function() {
                window.location.href = "{{ url('/maker') }}";
            });

            document.getElementById('mobile-redirect-button').addEventListener('click', function() {
                window.location.href = "{{ url('/maker') }}";
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('js/ajaxSetup.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
        <script>
            var company = @json(session('company', []));
            var image = @json(session('image', []));
            var imageLoad = @json(session('image-load', []));
            var dir="category-image/";
            if(imageLoad=='order'){
                dir="svgs/";
            }
        //alert(dir+"---"+imageLoad)
        
        </script>
        {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
        <script>
            var canvas
            $(document).ready(function() {
                canvas = new fabric.Canvas('logo-canvas');
                
                
                
                 // Automatically trigger click event on page load for #save-svg or #mobile-save-svg
                    //$('#save-svg, #mobile-save-svg').trigger('click');
                
                    // Attach the click handler for future manual clicks
                 //  $('#save-svg, #mobile-save-svg').on('click', saveCanvasAsSVGToServer);
                
                //  responsive start





                var originalWidth = 855;
                var originalHeight = 590;

                // Set the original canvas size
                canvas.setWidth(originalWidth);
                canvas.setHeight(originalHeight);

 
      
                // // Add sample objects (for demonstration)
                // var rect = new fabric.Rect({
                //     left: 100,
                //     top: 100,
                //     fill: 'red',
                //     width: 50,
                //     height: 50
                // });
                // var text = new fabric.Text('Sample Text', {
                //     left: 200,
                //     top: 200,
                //     fontSize: 20
                // });
                // canvas.add(rect);
                // canvas.add(text);
                
                        
                // Function to resize the canvas without moving the objects
                function resizeCanvas() {
                 // Check if the window width is less than 768px
                    if ($(window).width() < 768) {
                        $('.mobilebar').show();
                        $('.sidebar').hide();
                        $('.rfs-heading').hide();
                        
                       
                        
                        const outerCanvasContainer = $('.fabric-canvas-wrapper')[0];
                        //console.log(outerCanvasContainer);

                        const ratio = canvas.getWidth() / canvas.getHeight();
                        const containerWidth = outerCanvasContainer.clientWidth;
                        const containerHeight = outerCanvasContainer.clientHeight;

                        // Scale canvas based on the container width
                        const scale = containerWidth / canvas.getWidth();
                        const zoom = canvas.getZoom() * scale;

                        // Set new dimensions for the canvas
                        canvas.setDimensions({
                            width: containerWidth,
                            height: containerWidth / ratio
                        });

                        // Apply zoom and viewport transformation
                        canvas.setViewportTransform([zoom, 0, 0, zoom, 0, 0]);

                        // Render the updated canvas
                        canvas.renderAll();
                    }else{
                        $('.sidebar').show();
                        $('.mobilebar').hide();
                        $('.rfs-heading').show();
                    }
                }

                


                
                 $(window).resize(resizeCanvas);

                $(window).on('load', resizeCanvas); // Call resizeCanvas on window load




       
                // responsive end







                // Initialize state management
                let canvasState = [];
                let currentStateIndex = -1;
                let isUndoingRedoing = false;

                function saveCanvasState() {
                    if (isUndoingRedoing) return;
                    canvasState = canvasState.slice(0, currentStateIndex + 1); // Remove future states
                    canvasState.push(JSON.stringify(canvas));
                    currentStateIndex++;
                }

                
                // Function to load and display car.svg from the root directory
                function loadCarSVG() {
                    $.ajax({
                        url: dir + image,
                        dataType: 'text',
                        success: function(svgString) {
                            // Clear the canvas and color palettes
                            canvas.clear();
                            $('#color-palettes, #mobile-color-palettes').empty();
                            @php
                            $companyName = session('company') ??  $selectedProduct->company_name  ?? $selectedProduct->category['name'];
                            @endphp
                        // Load the SVG
                        fabric.loadSVGFromString(svgString, function(objects, options) {
                        // Calculate the center of the canvas based on product's logo position
                                 
                        var imageLoad = @json(session('image-load', []));
                        if(imageLoad=='order'){
                            
                                   
                                        const nonTextObjects = objects.filter(obj => obj.type !== 'text');
                                        // Create a group from non-text SVG objects
                                        var group = new fabric.Group(nonTextObjects, {
                                            selectable: true,
                                            evented: true,
                                        });

                                        // Scale the group based on the original SVG size to fit the canvas
                                        var canvasWidth = canvas.getWidth();
                                        var canvasHeight = canvas.getHeight();

                                        // Calculate scaling factor
                                        var scaleX = canvasWidth / options.width;  
                                        var scaleY = canvasHeight / options.height; 
                                        var scaleFactor = Math.min(scaleX, scaleY); // Use the smaller scale factor

                                        // Apply scaling to the group
                                        group.scale(scaleFactor);

                                        // Position objects based on their original SVG attributes
                                        // nonTextObjects.forEach(function(obj) {
                                        //     obj.set({
                                        //         left: obj.left ? obj.left * scaleFactor : 0,
                                        //         top: obj.top ? obj.top * scaleFactor : 0,
                                        //     });
                                        // });


                                        
                                        // Add the group to the canvas
                                        canvas.add(group);
                                        canvas.renderAll();
                                        canvas.calcOffset();
                            }else{
                                
                                    
                                
                                @php
                                    $iconLeft = 2;
                                    $iconTop = 2.7;
                                    $textWidth= 720; 
                                    if ($selectedProduct->logo_position == 'left') {
                                        $iconLeft = 4.7;
                                        $textWidth= 400; 
                                        $iconTop = 2.1;
                                    } elseif ($selectedProduct->logo_position == 'right') {
                                        $iconLeft = 1.3;
                                        $textWidth= 400; 
                                    } elseif ($selectedProduct->logo_position == 'top') {
                                        $iconTop = 2.5;
                                    } elseif ($selectedProduct->logo_position == 'bottom') {
                                        $iconTop = 1.5;
                                    }
                                @endphp
            

                                var canvasCenter = {
                                    left: canvas.width / {{ $iconLeft }},
                                    top: canvas.height / {{ $iconTop }}
                                };

                                // Create a temporary group to calculate the bounding box and center it
                                var group = new fabric.Group(objects);

                                // Determine the scale factor to upscale the SVG
                                var maxWidth = canvas.width * 0.6;  // Scale to 80% of canvas width
                                var maxHeight = canvas.height * 0.6; // Scale to 80% of canvas height

                                // Calculate scaling ratio
                                var scaleX = maxWidth / group.width;
                                var scaleY = maxHeight / group.height;
                                var scaleFactor = Math.min(scaleX, scaleY); // Ensure uniform scaling by choosing the smaller factor

                                // Apply the scaling to the group
                                group.scale(scaleFactor);
                                
                                // Add the group to the canvas
                                canvas.add(group);

                                // Center the group on the canvas
                                group.originX = 'center';
                                group.originY = 'center';
                                group.left = canvasCenter.left;
                                group.top = canvasCenter.top;
                                group.setCoords();
                             }
                        // Ungroup the objects and add them back to the canvas
                        var ungroupedObjects = group.getObjects();
                        group.destroy();
                        canvas.remove(group);

                        // Add each object to the canvas and adjust its position
                        ungroupedObjects.forEach(function(obj, index) {
                            
                            if (obj.type === 'text') {
                                var company = "{{ $companyName }}".replace(/&amp;/g, '&');

                                // Create the fabric.Textbox for text layers with scaling applied
                                var logoText = new fabric.Textbox(company, {
                                    left: obj.left,
                                    top: obj.top,
                                    fontSize: obj.fontSize * scaleFactor || 40,  // Scale the font size
                                    fill: "{{$selectedProduct->color}}" || obj.fill || '#353535',  // Keep original color or default
                                    fontFamily: obj.fontFamily || 'Arial',  // Keep original font
                                    selectable: true,
                                    evented: true,
                                    width: obj.width * scaleFactor || canvas.width * 0.4 // Scale width
                                });

                           
                                //canvas.add(logoText);
                            } else {
                                obj.set({
                                    selectable: true,
                                    evented: true,
                                });
                                canvas.add(obj);
                            }

                            if (obj.type === 'path') {
                                
                                // Create a color picker for each layer
                                var colorPicker = $('<input/>', {
                                    type: 'color',
                                    id: 'color-picker-' + index,
                                    value: obj.fill || '#FA000000',
                                    class: 'form-control mt-2 colorPicker'
                                });

                                // Create a label for each color picker
                                var label = $('<label/>', {
                                    for: 'color-picker-' + index,
                                    class: 'color-picker-container'
                                });
                                // Add the label and color picker to the color-palettes div
                                if ($(window).width() < 768) {
                                    $('#mobile-color-palettes').append(label).append(colorPicker);
                                }else{
                                    $('#color-palettes').append(label).append(colorPicker);
                                }

                                
                               

                                // Add input event to update the color of the selected layer in real-time
                                colorPicker.on('input', function() {
                                    var selectedLayerIndex = parseInt($(this).attr('id').split('-').pop());
                                    var selectedLayer = canvas.getObjects()[selectedLayerIndex];
                                    if (selectedLayer) {
                                        
                                        selectedLayer.set('fill', $(this).val());
                                        canvas.renderAll();
                                        saveCanvasState(); // Save canvas state when a color change happens
                                    }
                                });
                            }    

                        });

                        // Render all objects on the canvas
                        canvas.renderAll();
                        
                    });



                    
                    function saveCanvasAsSVGToServer() {

                        // Get all objects from the canvas
                        const objects = canvas.getObjects();
                        let fillColor=null,font_family=null,font_size=null,textAlign=null,left=null,top=null,sample_text=null,text_width=null,font_weight=null,font_style=null,
                        outlineColor=null,outlineWidth=null,shadow=null,outline_color=null,outline_width=null,shadow_color=null,shadow_x=null,shadow_y=null,shadow_blur=null;
                        objects.forEach(obj => {
                            if (obj.type === 'textbox') { // Check if the object is a Textbox
                                // Extract color, fontFamily, and fontSize
                                fillColor = obj.fill;  // Text color
                                fontFamily = obj.fontFamily; // Font family
                                actualFontSize = obj.fontSize * obj.scaleY;
                                textAlign = obj.textAlign;  // Text alignment
                                left = obj.left;  // Get the 'left' position of the object
                                top = obj.top;    // Get the 'top' position of the object
                                text_width = obj.width * obj.scaleX;  // Get the scaled width of the text
                                sample_text = obj.text;  // Get the actual text content

                                font_weight = obj.fontWeight; // Get the font weight ('bold' or 'normal')
                                font_style = obj.fontStyle; // Get the font style ('italic' or 'normal')

                                outline_color = obj.stroke; // Get the stroke color
                                outline_width = obj.strokeWidth, // Get the stroke width
                                
                            
                                shadow_color = (obj.shadow && obj.shadow.color) ? obj.shadow.color : null;
                                shadow_x = (obj.shadow && obj.shadow.offsetX) ? obj.shadow.offsetX : null;
                                shadow_y = (obj.shadow && obj.shadow.offsetY) ? obj.shadow.offsetY : null;
                                shadow_blur = (obj.shadow && obj.shadow.blur ) ? obj.shadow.blur  : null;

                                    

                                console.log("Text Object Properties:");
                                console.log("Color:", fillColor);
                                console.log("Font Family:", fontFamily);
                                console.log("Font Size:", actualFontSize);
                                console.log("Left Position:", left);
                                console.log("Top Position:", top);
                                console.log("Text widht:", text_width);
                                console.log("Text:", sample_text);
                            }
                        });
                        // Export canvas to SVG string
                        const svgData = canvas.toSVG();

                        // Send the SVG data to the server using AJAX
                        $.ajax({
                            url: '{{url("/save-svg")}}', // Your endpoint to handle the SVG saving
                            type: 'POST',
                            data: {
                                svg: svgData,
                                color: fillColor, 
                                font_family: fontFamily,
                                font_size: actualFontSize,
                                left: left,
                                top: top,
                                sample_text: sample_text,
                                text_width:text_width,
                                font_weight:font_weight,
                                font_style:font_style,
                                outline_color:outline_color,
                                outline_width:outline_width,
                                shadow_color:shadow_color,
                                shadow_x:shadow_x,
                                shadow_y:shadow_y,
                                shadow_blur:shadow_blur,
                            
                                _token: '{{ csrf_token() }}' // If using Laravel, pass the CSRF token
                            },
                            success: function (response) {
                                if (response.success) {
                                    alert('SVG saved successfully!');
                                } else {
                                    alert('Failed to save SVG.');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error saving SVG:', error);
                                alert('You are trying to save without changes, Please try again');
                            }
                        });
                    }

                    // Attach the save function to the "Save SVG" button click event
                    $('#save-svg, #mobile-save-svg').on('click', saveCanvasAsSVGToServer);



                    @if(isset($selectedProduct->background_color) && !empty($selectedProduct->background_color))
                        canvas.setBackgroundColor('{{ $selectedProduct->background_color }}', canvas.renderAll.bind(canvas));
                    @endif

                    // Update color picker and text settings when a layer is selected
                    canvas.on('object:selected', function(e) {
                        var activeObject = e.target;
                        var selectedIndex = canvas.getObjects().indexOf(activeObject);

                        // Highlight the corresponding color picker
                        $('#color-palettes input,#mobile-color-palettes input').each(function() {
                            $(this).parent().removeClass('highlighted');
                        });

                        $('#color-picker-' + selectedIndex).parent().addClass(
                            'highlighted');

                        // Update the text, text color, and font family for the selected text layer
                        if (activeObject.type === 'textbox') {
                            $('#logo-text').val(activeObject.text || '');
                            $('#text-color, #mobile-text-color').val(activeObject.fill || '#000000');
                            $('#font-family, #mobile-font-family').val(activeObject.fontFamily || 'Arial');
                            $('#italic-text, #mobile-italic-text').toggleClass('active', activeObject
                                .fontStyle === 'italic');
                            $('#bold-text , #mobile-bold-text').toggleClass('active', activeObject
                                .fontWeight === 'bold');
                            $('#small-text').toggleClass('active', activeObject.fontSize &&
                                activeObject.fontSize < 20);
                            $('#caps-text').prop('checked', activeObject.textTransform ===
                                'uppercase');
                            $('#text-curve').prop('checked', activeObject.get('path') ?
                                true : false);
                            $('#text-outline , #mobile-text-outline').prop('checked', activeObject.stroke ? true :
                                false);
                            $('#text-shadow, #mobile-text-shadow').prop('checked', activeObject.shadow ? true :
                                false);
                        } else {
                            $('#logo-text').val('');
                            $('#text-color, #mobile-text-color').val('');
                            $('#font-family, #mobile-font-family').val('Arial');
                            $('#italic-text , #mobile-italic-text').removeClass('active');
                            $('#bold-text, #mobile-bold-text').removeClass('active');
                            $('#small-text').removeClass('active');
                            $('#caps-text').prop('checked', false);
                            $('#text-curve').prop('checked', false);
                            $('#text-outline, #mobile-text-outline').prop('checked', false);
                            $('#text-shadow, #mobile-text-shadow').prop('checked', false);
                        }
                    });

                    // Save state when an object is modified, added, or removed
                    canvas.on('object:added', saveCanvasState);
                    canvas.on('object:modified', saveCanvasState);
                    canvas.on('object:removed', saveCanvasState);
                        // Undo function
                    function undo() {
                        if (currentStateIndex > 0) {
                            isUndoingRedoing = true;
                            currentStateIndex--;
                            canvas.loadFromJSON(canvasState[currentStateIndex], function() {
                                canvas.renderAll();
                                isUndoingRedoing = false;
                            });
                        }
                    }

                    // Redo function
                    function redo() {
                        if (currentStateIndex < canvasState.length - 1) {
                            isUndoingRedoing = true;
                            currentStateIndex++;
                            canvas.loadFromJSON(canvasState[currentStateIndex], function() {
                                canvas.renderAll();
                                isUndoingRedoing = false;
                            });
                        }
                    }

                    // Bind undo and redo buttons
                    $('#undo , #mobile-undo').on('click', undo);
                    $('#redo, #mobile-redo').on('click', redo);
                    // end undu redo

                    // Deselect object
                    canvas.on('before:selection:cleared', function() {
                        $('#logo-text').val('');
                        $('#text-color, #mobile-text-color').val('');
                        $('#font-family, #mobile-font-family').val('Arial');
                        $('#color-palettes input,#mobile-color-palettes input').each(function() {
                            $(this).parent().removeClass('highlighted');
                        });
                        $('#italic-text , #mobile-italic-text').removeClass('active');
                        $('#bold-text, #mobile-bold-text').removeClass('active');
                        $('#small-text').removeClass('active');
                        $('#caps-text').prop('checked', false);
                        $('#text-curve').prop('checked', false);
                        $('#text-outline, #mobile-text-outline').prop('checked', false);
                        $('#text-shadow, #mobile-text-shadow').prop('checked', false);
                    });

                    // Update the text for the selected textbox
                    $('#logo-text').on('input', function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                            activeObject.set('text', $(this).val());
                            canvas.renderAll();
                        }
                    });

                    // Update the text color for the selected textbox
                
                    $('#text-color , #mobile-text-color').on('input', function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                            activeObject.set('fill', $(this).val());
                            canvas.renderAll();
                            saveCanvasState(); // Save canvas state when a text color change happens
                        }
                    });

                    // Update the font family for the selected textbox
                    $('#font-family, #mobile-font-family').change(function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                            activeObject.set('fontFamily', $(this).val());
                            canvas.renderAll();
                        }
                    });

                    // Toggle italic text
                    $('#italic-text , #mobile-italic-text').click(function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                            var newFontStyle = activeObject.fontStyle === 'italic' ? '' :
                                'italic';
                            activeObject.set('fontStyle', newFontStyle);
                            $(this).toggleClass('active', newFontStyle === 'italic');
                            canvas.renderAll();
                        }
                    });

                    // Toggle bold text
                    $('#bold-text ,#mobile-bold-text').click(function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                          
                            var newFontWeight = activeObject.fontWeight === 'bold' ? '' :'bold';
                         
                            activeObject.set('fontWeight', newFontWeight);
                         
                            $(this).toggleClass('active', newFontWeight === 'bold');
                            canvas.renderAll();
                        }
                    });

                    // Delete selected layer
                    $('#delete-button, #mobile-delete-button').click(function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject) {
                            canvas.remove(activeObject)
                        }
                    });

                    // Toggle small text size
                    $('#small-text').click(function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                            var newSize = activeObject.fontSize < 20 ? 14 : 24;
                            activeObject.set('fontSize', newSize);
                            $(this).toggleClass('active', newSize < 20);
                            canvas.renderAll();
                        }
                    });

                    // Toggle all caps
                    $('#caps-text').change(function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                            var newTextTransform = $(this).is(':checked') ? 'uppercase' :
                                'none';
                            activeObject.set('textTransform', newTextTransform);
                            canvas.renderAll();
                        }
                    });

                    // Apply outline effect
                    $('#text-outline , #mobile-text-outline').change(function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                            if ($(this).is(':checked')) {
                                activeObject.set('stroke', $('#text-color, #mobile-text-color').val());
                                activeObject.set('strokeWidth', 2);
                            } else {
                                activeObject.set('stroke', null);
                                activeObject.set('strokeWidth', 0);
                            }
                            canvas.renderAll();
                        }
                    });

                    // Apply shadow effect
                    $('#text-shadow, #mobile-text-shadow').change(function() {
                        var activeObject = canvas.getActiveObject();
                        if (activeObject && activeObject.type === 'textbox') {
                            if ($(this).is(':checked')) {
                                activeObject.set('shadow', {
                                    color: 'rgba(0,0,0,0.3)',
                                    offsetX: 2,
                                    offsetY: 2,
                                    blur: 5
                                });
                            } else {
                                activeObject.set('shadow', null);
                            }
                            canvas.renderAll();
                        }
                    });

                    // Add "Sample 1" text element


                    // Get the session company value and escape single quotes
                    @php
                        $fontSlug = $selectedProduct->font->slug ?? null;
                        $font = $fontSlug ? pathinfo($fontSlug, PATHINFO_FILENAME) : '';
                        $fontSize = isset($selectedProduct->logomaker_font_size) && strlen($selectedProduct->logomaker_font_size) > 1 ? $selectedProduct->logomaker_font_size : 40;

                        $companyName = session('company') ? session('company') : $selectedProduct->category->name;

                        $companyNameLength = strlen($companyName);

                        // Ensure fontSize is numeric
                        if (!is_numeric($fontSize)) {
                            $fontSize = 30; // or some other default numeric value
                        }

                        if ($companyNameLength > 10 && $companyNameLength <= 15) {
                            $fontSize -= 6;
                        } elseif ($companyNameLength > 15 && $companyNameLength <= 20) {
                            $fontSize -= 12;
                        } elseif ($companyNameLength > 20 && $companyNameLength <= 25) {
                            $fontSize -= 15;
                        } elseif ($companyNameLength > 25 && $companyNameLength <= 30) {
                            $fontSize -= 20;
                        } 

                        $leftPosition = isset($selectedProduct->canva_left) && strlen($selectedProduct->canva_left) > 1 ? floatval($selectedProduct->canva_left) : '3.2';
                        $topPosition = isset($selectedProduct->canva_top) && strlen($selectedProduct->canva_top) > 1 ? floatval($selectedProduct->canva_top) : '2';


                        $companyName = session('company') ??  $selectedProduct->company_name  ?? $selectedProduct->category['name'];

                        $companyNameLength = strlen($companyName);

                        $textPosition = 'center';
                        if ($selectedProduct->logo_position == 'left') {
                            $textPosition = 'left';
                        } elseif ($selectedProduct->logo_position == 'right') {
                            $textPosition = 'right';
                        }
                        
                    @endphp
    
                    var imageLoad = @json(session('image-load', []));
                    
                
                    // Create the textbox with the session company value
                    var company = "{{ $companyName }}".replace(/&amp;/g, '&');
// alert(imageLoad);
                    if(imageLoad=='order'){
                       
                            var tt='{{ isset($order) ? $order->sample_text :""}}'
                           // alert(imageLoad+"===="+tt);
                            var sampleText1 = new fabric.Textbox(tt.replace(/&amp;/g, '&'), {
                                left: {{ isset($order) ? $order->left : 0 }}, // Use 0 as default if $order->left is not set
                                top: {{ isset($order) ? $order->top : 0 }}, // Use 0 as default if $order->top is not set
                                fill: '{{ isset($order) ? $order->color : "#000000" }}', // Default to black color
                                fontFamily: '{{ isset($order) ? $order->font_family : "robboto" }}', // Default to Arial if not set
                                textAlign: '{{ $textPosition ?? "left" }}', // Default to left alignment
                                selectable: true,
                                width: {{ isset($order) ? $order->text_width : 0 }}, // Provide a default width
                                evented: true,
                                charSpacing: {{ $selectedProduct->canva_spacing ?? 100 }},
                                fontSize: {{ isset($order) ? $order->font_size : 16 }}, // Default to 16px if not set
                                fontWeight: '{{ isset($order) && $order->font_weight ? $order->font_weight : "normal" }}', // Set bold if $order->font_weight is set to 'bold'
                                fontStyle: '{{ isset($order) && $order->font_style ? $order->font_style : "normal" }}', // Set italic if $order->font_style is set to 'italic'
                                stroke: '{{ isset($order) && $order->outline_color ? $order->outline_color : "" }}', // Set the outline color if available
                                strokeWidth: {{ isset($order) && $order->outline_width ? $order->outline_width : 0 }}, // Set the outline width if available, default to 0 (no outline)
                                // Adding shadow property
                                shadow: {
                                        color: '{{ isset($order) && $order->shadow_color ? $order->shadow_color : "rgba(0, 0, 0, 0)" }}', // Shadow color (default to semi-transparent black)
                                        blur: {{ isset($order) && $order->shadow_blur ? $order->shadow_blur : 0 }}, // Blur amount (default to 5)
                                        offsetX: {{ isset($order) && $order->shadow_x ? $order->shadow_x : 0 }}, // Horizontal shadow offset (default to 5)
                                        offsetY: {{ isset($order) && $order->shadow_y ? $order->shadow_y : 0 }}, // Vertical shadow offset (default to 5)
                                        // opacity: {{ isset($order) && $order->shadow_color ? $order->shadow_color : 0.5 }} // Opacity (default to 0.5)
                                    }

                            });



                            canvas.add(sampleText1);
                    }else{
                                var sampleText1 = new fabric.Textbox(company, {
                                left: canvas.width / {{ $selectedProduct->canva_left ?? 2.5}} - 274, // Position the text
                                top: canvas.height / {{ $selectedProduct->canva_top ?? 2}} + 120, // Position the text

                            
                                fill: '{{ $selectedProduct->color }}',
                                fontFamily: "{{ $font }}",
                                textAlign: '{{ $textPosition }}',
                                selectable: true,
                                width: {{ $textWidth}},
                                evented: true,
                                charSpacing: {{ $selectedProduct->canva_spacing ?? 100}},


                                fontSize: {{ $selectedProduct->canva_font_size ?? 40 }},


                            });
                            canvas.add(sampleText1);

                    }


                    @if(!empty($selectedProduct->slogan_name))

                        // // Add "Sample 2" text element
                        var sampleText2 = new fabric.Textbox('{{$selectedProduct->slogan_name}}', {
                            left: canvas.width / {{ $selectedProduct->canva_slogan_left ?? 2.2}} - 50, // Position the text
                            top: canvas.height / {{ $selectedProduct->canva_slogan_top ?? 2.1}} + 180, // Position the text
                            fontSize: {{ $selectedProduct->canva_slogan_size ?? 14}}  ,
                            width: 180,
                            fill: '{{ $selectedProduct->color }}',
                            fontFamily: 'Arial',
                            textAlign: 'center',
                            selectable: true,
                            evented: true,
                            charSpacing: {{ $selectedProduct->canva_slogan_spacing ?? 100 }}
                        });

                        // Add the text elements to the canvas
                    
                        canvas.add(sampleText2);
                        @endif



                        canvas.renderAll();
                        },
                        error: function(xhr, status, error) {
                            console.error("Error loading SVG:", status, error);
                        }
                    });
                }



                // here i am testing for save logo

   

// Function to load the SVG exactly as it is without changing position or scale
function loadCarSVGSave() {
    $.ajax({
        url: dir + image,
        dataType: 'text',
        success: function(svgString) {
            // Clear the canvas and color palettes
            canvas.clear();
            $('#color-palettes, #mobile-color-palettes').empty();

            // Load the SVG without modifying left, top, or scaling properties
            fabric.loadSVGFromString(svgString, function(objects, options) {
                const nonTextObjects = objects.filter(obj => obj.type !== 'text');

                // Create a group from non-text SVG objects
                var group = new fabric.Group(nonTextObjects, {
                    selectable: true,
                    evented: true,
                });

                // Scale the group based on the original SVG size to fit the canvas
                var canvasWidth = canvas.getWidth();
                var canvasHeight = canvas.getHeight();

                // Calculate scaling factor
                var scaleX = canvasWidth / options.width;  
                var scaleY = canvasHeight / options.height; 
                var scaleFactor = Math.min(scaleX, scaleY); // Use the smaller scale factor

                // Apply scaling to the group
                group.scale(scaleFactor);

                // Position objects based on their original SVG attributes
                nonTextObjects.forEach(function(obj) {
                    obj.set({
                        left: obj.left ? obj.left * scaleFactor : 0,
                        top: obj.top ? obj.top * scaleFactor : 0,
                    });
                });

                // Add the group to the canvas
                canvas.add(group);



                
                // // Only add the sample text if necessary
                // var tt = '{{ isset($order) ? $order->sample_text :""}}';
                // if (tt.trim() !== '') {
                //     var sampleText1 = new fabric.Textbox(tt.replace(/&amp;/g, '&'), {
                //         left: {{ isset($order) ? $order->left : 0 }},
                //         top: {{ isset($order) ? $order->top : 0 }},
                //         fill: '{{ isset($order) ? $order->color : "#000000" }}',
                //         fontFamily: '{{ isset($order) ? $order->font_family : "robboto" }}',
                //         textAlign: '{{ $textPosition ?? "left" }}',
                //         selectable: true,
                //         width: {{ isset($order) ? $order->text_width : 0 }},
                //         evented: true,
                //         charSpacing: {{ $selectedProduct->canva_spacing ?? 100 }},
                //         fontSize: {{ isset($order) ? $order->font_size : 16 }},
                //         fontWeight: '{{ isset($order) && $order->font_weight ? $order->font_weight : "normal" }}',
                //         fontStyle: '{{ isset($order) && $order->font_style ? $order->font_style : "normal" }}',
                //         stroke: '{{ isset($order) && $order->outline_color ? $order->outline_color : "" }}',
                //         strokeWidth: {{ isset($order) && $order->outline_width ? $order->outline_width : 0 }},
                //         shadow: {
                //             color: '{{ isset($order) && $order->shadow_color ? $order->shadow_color : "rgba(0, 0, 0, 0)" }}',
                //             blur: {{ isset($order) && $order->shadow_blur ? $order->shadow_blur : 0 }},
                //             offsetX: {{ isset($order) && $order->shadow_x ? $order->shadow_x : 0 }},
                //             offsetY: {{ isset($order) && $order->shadow_y ? $order->shadow_y : 0 }}
                //         }
                //     });

                //     canvas.add(sampleText1);
                //}

                // Adjust object positions and render the canvas
                canvas.renderAll();
                canvas.calcOffset(); // Recalculate canvas offsets to ensure accurate rendering
            });
        },
        error: function(xhr, status, error) {
            console.error("Error loading SVG:", status, error);
        }
    });
}




            // if(imageLoad=='order'){
            //     loadCarSVGSave();
            //     // Initialize the canvas with your specified dimensions
            //     canvas = new fabric.Canvas('logo-canvas');
            //     canvas.setWidth(855);
            //     canvas.setHeight(590);
             
            // }else{
                loadCarSVG();

           // }

           

                // Add text to the canvas
                $('#add-text, #mobile-add-text').click(function() {
                        var textField = $(this).is('#add-text') ? '#logo-text' : '#mobile-logo-text';

                        // Create a new fabric text box with the selected text input
                        var text = new fabric.Textbox($(textField).val(), {
                        left: 100,
                        top: 100,
                        fill: $('#text-color, #mobile-text-color').val(),
                        fontFamily: $('#font-family, #mobile-font-family').val(),
                        fontSize: $('#small-text').hasClass('active') ? 14 : 24,
                        fontWeight: $('#bold-text ,#mobile-bold-text').hasClass('active') ? 'bold' : '',
                        fontStyle: $('#italic-text, #mobile-italic-text').hasClass('active') ? 'italic' : '',
                        textTransform: $('#caps-text').is(':checked') ? 'uppercase' : 'none',
                    });
                    canvas.add(text);
                    canvas.renderAll();
                });

            
                // Delete the current logo
                $('#delete-logo').click(function() {
                    canvas.clearmaker();
                    $('#color-palettes').empty(); // Clear the color palettes
                });

                // Trigger color palette updates on canvas interactions
                canvas.on('after:render', function() {
                    $('#color-palettes input').each(function() {
                        var colorPickerId = $(this).attr('id');
                        var index = parseInt(colorPickerId.split('-').pop());
                        var layer = canvas.getObjects()[index];
                        if (layer) {
                            $(this).val(layer.fill || '#000000');
                        }
                    });
                });

                // Update logo color for non-text objects
                $('#logo-color').change(function() {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type !== 'textbox') {
                        activeObject.set('fill', $(this).val());
                        canvas.renderAll();
                    }
                });

                // Update the background color for the canvas
                $('#background-color, #mobile-background-color').on('input', function() {
                    canvas.setBackgroundColor($(this).val(), canvas.renderAll.bind(canvas));
                });
            });

            $(function() {
                let dataURL = sessionStorage.getItem('logoDataUrl')

                $.ajax({
                    url: "{{ route('putImgStringIntoSession') }}",
                    method: 'POST',
                    data: {
                        dataURL
                    },
                    success: function() {
                        $.ajax({
                            url: "{{ route('saveLogo') }}",
                            method: 'POST',
                            data: {
                                userId: {{ auth()->id() }},
                                productId: {{ session()->get('product-id') }},
                            },
                        })
                    },
                })

                // $.ajax({
                //     url: "{{ route('saveLogo') }}",
                //     method: 'POST',
                //     data: {
                //         userId: {{ auth()->id() }},
                //         productId: {{ session()->get('product-id') }},
                //     },
                // })

                $('.redirect-to-pckgs-btn').click(function() {
                    let dataURL = canvas.toDataURL({
                        format: 'png',
                        quality: 1
                    });
                    $.ajax({
                        url: "{{ route('putImgStringIntoSession') }}",
                        method: 'POST',
                        data: {
                            dataURL
                        },
                        success: function() {
                            sessionStorage.setItem('logoDataUrl', dataURL)
                            $.ajax({
                                url: "{{ route('saveLogo') }}",
                                method: 'POST',
                                data: {
                                    userId: {{ auth()->id() }},
                                    productId: {{ session()->get('product-id') }},
                                },
                            })
                            location.assign("{{ route('packages') }}")
                        },
                    })
                })

                $('#save-logo , #mobile-save-logo').click(function() {
                        let dataURL = canvas.toDataURL({
                            format: 'png',
                            quality: 1
                        });
                        @auth
                        $.ajax({
                            url: "{{ route('putImgStringIntoSession') }}",
                            method: 'POST',
                            data: {
                                dataURL
                            },
                            success: function() {
                                sessionStorage.setItem('logoDataUrl', dataURL)
                                $.ajax({
                                    url: "{{ route('saveLogo') }}",
                                    method: 'POST',
                                    data: {
                                        userId: {{ auth()->id() }},
                                        productId: {{ session()->get('product-id') }},
                                    },font_weight
                                })
                            },
                        })
                    @endauth

                    // var dataURL = canvas.toDataURL({
                    //     format: 'png',
                    //     quality: 1
                    // });
                    var link = document.createElement('a'); link.href = dataURL; link.download = 'logo.png'; link
                    .click();
                })
            })
        </script>
        <!----------------------------------------- footer ------------------------------->


        <!-----------------------------------------End footer ------------------------------->


    @endsection
