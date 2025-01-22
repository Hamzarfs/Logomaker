<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Logo Maker')

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

                        <div class="text-effects">
                            {{-- <div class="form-check">
                                <input type="checkbox" id="text-curve" class="form-check-input">
                                <label for="text-curve" class="form-check-label">Curve</label>
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
                            <label for="font-family" class="font-label">Font Family  </label>
                            <select id="font-family" class="form-control">
                                <!-- Add your font options here -->
                                <!-- <option value="{{ session()->get('font') }}" style="font-family: '{{ session()->get('font') }};'">{{ session()->get('font') }}</option> -->
                                <option value="lazyp-eople" {{ session()->get('font') == "lazyp-eople" ? "selected" : "" }} style="font-family: 'lazyp-eople';">Lazy People</option>
                                <option value="Remon-Demo" {{  session()->get('font') == "Remon-Demo" ? "selected" : "" }}  style="font-family: 'Remon-Demo';">Remon Demo</option>

                                <option value="Stifly" {{ session()->get('font') == "Stifly" ? "selected" : "" }}  style="font-family: 'Stifly';">Stifly</option>
                                <option value="Brandes-Regular" {{ session()->get('font') == "Brandes-Regular" ? "selected" : "" }}  style="font-family: 'Brandes-Regular';">Brandes Regular</option>
                                <option value="Rohgaz-Demo-VersionRegular" {{ session()->get('font') == "Rohgaz-Demo-VersionRegular" ? "selected" : "" }}  style="font-family: 'Rohgaz-Demo-VersionRegular';">Rohgaz Demo VersionRegular</option>
                                <option value="Forest-Trophy-Textured"  {{ session()->get('font') == "Forest-Trophy-Textured" ? "selected" : "" }} style="font-family: 'Forest-Trophy-Textured';">Forest Trophy Textured</option>
                                <option value="Aesthetic-Wonder-DEMOBold" {{ session()->get('font') == "Aesthetic-Wonder-DEMOBold" ? "selected" : "" }}  style="font-family: 'Aesthetic-Wonder-DEMOBold';">Aesthetic Wonder DEMOBold</option>
                                <option value="Nerve-Brush-Regular"  {{ session()->get('font') == "Nerve-Brush-Regular" ? "selected" : "" }} style="Nerve-Brush-Regular: 'lazyp-eople';">Nerve Brush Regular</option>
                                <option value="Stander-DEMO" {{ session()->get('font') == "Stander-DEMO" ? "selected" : "" }}  style="font-family: 'Stander-DEMO';">Stander DEMO</option>
                                <option value="Dasport-DEMO" {{ session()->get('font') == "Dasport-DEMO" ? "selected" : "" }}  style="font-family: 'Dasport-DEMO';">Dasport DEMO</option>
                                <option value="LightSport-DEMO" {{ session()->get('font') == "LightSport-DEMO" ? "selected" : "" }}  style="font-family: 'LightSport-DEMO';">LightSport DEMO</option>

                                <!-- <option value="Roboto" style="font-family: 'Roboto';">Roboto</option>
                                <option value="Lato" style="font-family: 'Lato';">Lato</option>
                                <option value="Montserrat" style="font-family: 'Montserrat';">Montserrat</option>
                                <option value="Poppins" style="font-family: 'Poppins';">Poppins</option>
                                <option value="Arial" style="font-family: Arial;">Arial</option>
                                <option value="Verdana" style="font-family: Verdana;">Verdana</option>
                                <option value="Courier New" style="font-family: Courier New;">Courier New</option>
                                <option value="Georgia" style="font-family: Georgia;">Georgia</option>
                                <option value="Times New Roman" style="font-family: Times New Roman;">Times New Roman
                                </option>
                                <option value="Trebuchet MS" style="font-family: Trebuchet MS;">Trebuchet MS</option>
                                <option value="Comic Sans MS" style="font-family: Comic Sans MS;">Comic Sans MS</option>
                                <option value="Tahoma" style="font-family: Tahoma;">Tahoma</option>
                                <option value="Impact" style="font-family: Impact;">Impact</option>
                                <option value="Arial Black" style="font-family: Arial Black;">Arial Black</option>
                                <option value="Lucida Console" style="font-family: Lucida Console;">Lucida Console</option>
                                <option value="Lucida Sans Unicode" style="font-family: Lucida Sans Unicode;">Lucida Sans
                                    Unicode</option>
                                <option value="Consolas" style="font-family: Consolas;">Consolas</option>
                                <option value="Palatino Linotype" style="font-family: Palatino Linotype;">Palatino Linotype
                                </option>
                                <option value="Garamond" style="font-family: Garamond;">Garamond</option>
                                <option value="MS Serif" style="font-family: MS Serif;">MS Serif</option>
                                <option value="MS Sans Serif" style="font-family: MS Sans Serif;">MS Sans Serif</option>
                                <option value="Bookman Old Style" style="font-family: Bookman Old Style;">Bookman Old Style
                                </option>
                                <option value="Arial Narrow" style="font-family: Arial Narrow;">Arial Narrow</option>
                                <option value="Century Gothic" style="font-family: Century Gothic;">Century Gothic</option>
                                <option value="Frank Ruhl Libre" style="font-family: Frank Ruhl Libre;">Frank Ruhl Libre
                                </option>
                                <option value="Droid Sans" style="font-family: Droid Sans;">Droid Sans</option>
                                <option value="Bebas Neue" style="font-family: Bebas Neue;">Bebas Neue</option>
                                <option value="Playfair Display" style="font-family: Playfair Display;">Playfair Display
                                </option>
                                <option value="Poppins" style="font-family: 'Poppins';">Poppins</option>
                                <option value="Montserrat" style="font-family: 'Montserrat';">Montserrat</option>
                                <option value="Lora" style="font-family: Lora;">Lora</option>
                                <option value="Merriweather" style="font-family: Merriweather;">Merriweather</option>
                                <option value="Raleway" style="font-family: Raleway;">Raleway</option>
                                <option value="Quicksand" style="font-family: Quicksand;">Quicksand</option>
                                <option value="PT Sans" style="font-family: PT Sans;">PT Sans</option>
                                <option value="Ubuntu" style="font-family: Ubuntu;">Ubuntu</option>
                                <option value="Fira Sans" style="font-family: Fira Sans;">Fira Sans</option>
                                <option value="Nunito" style="font-family: Nunito;">Nunito</option>
                                <option value="Source Sans Pro" style="font-family: Source Sans Pro;">Source Sans Pro
                                </option>
                                <option value="Open Sans" style="font-family: 'Open Sans';">Open Sans</option>
                                <option value="Lato" style="font-family: 'Lato';">Lato</option>
                                <option value="Exo 2" style="font-family: 'Exo 2';">Exo 2</option> -->
                            </select>

                            <button id="add-text" class="btn"><i class="fas fa-plus"></i> Add Text</button>
                            <input type="text" id="logo-text" class="form-control">
                            <div id="color-palettes" class="mt-3"></div>
                            @guest
                                <a href="{{ route('login') }}" class="btn mt-5"><i class="fas fa-save"></i> Save</a>
                            @else
                                @if ($hasOrder)
                                    <button id="save-logo" class="btn mt-5"><i class="fas fa-save"></i> Save</button>
                                @else
                                    <a href="javascript:void(0)" class="btn mt-5 redirect-to-pckgs-btn"><i
                                            class="fas fa-save"></i> Save</a>
                                @endif
                            @endguest
                            {{-- <button id="save-logo" class="btn"><i class="fas fa-save"></i> Save</button> --}}
                        </div>
                    </div>





                </div>
            </div>

            <div class="col-md-8">
                <div class="container-custom">

                    <div class="col-md-8">
                        <h1 class="text-center" style="margin-top: 20px;">RFS Logo Editor</h1>
                        <canvas id="logo-canvas" style="width: 100%; border: 1px solid;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('redirect-button').addEventListener('click', function() {
            window.location.href = "{{ url('/maker') }}";
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
    <script>
        var company = @json(session('company', []));
        var image = @json(session('image', []));
    </script>
    <!-- <script src="{{ asset('js/script.js') }}"></script> -->
    <script>

var canvas
$(document).ready(function () {

    canvas = new fabric.Canvas('logo-canvas');


    canvas.setWidth(855);
    canvas.setHeight(590);

    // canvas.setWidth(505);
    // canvas.setHeight(440);


    // load image

    // Function to load and display car.svg from the root directory
    function loadCarSVG() {
        $.ajax({
            url: 'category-image/' + image,
            dataType: 'text',
            success: function (svgString) {
                // Clear the canvas and color palettes
                canvas.clear();
                $('#color-palettes').empty();

                // Load the SVG
                fabric.loadSVGFromString(svgString, function (objects, options) {
                    // Calculate the center of the canvas
                    var canvasCenter = {
                        left: canvas.width / 2,
                        top: canvas.height / 2
                    };

                    // Calculate the bounding box of the combined objects
                    var boundingBox = new fabric.Group(objects).getBoundingRect();

                    // Calculate the offset to center the bounding box
                    var offset = {
                        left: canvasCenter.left - boundingBox.width / 2,
                        top: canvasCenter.top - boundingBox.height / 2
                    };

                    // Add each object to the canvas and adjust its position
                    objects.forEach(function (obj, index) {
                        // Set the object position to center the bounding box
                        obj.set({
                            left: obj.left + offset.left - boundingBox.left,
                            top: obj.top + offset.top - boundingBox.top,
                            selectable: true,
                            evented: true
                        });
                        canvas.add(obj);

                        // Create a color picker for each layer
                        var colorPicker = $('<input/>', {
                            type: 'color',
                            id: 'color-picker-' + index,
                            value: obj.fill || '#000000',
                            class: 'form-control mt-2 colorPicker'
                        });

                        // Create a label for each color picker
                        var label = $('<label/>', {
                            for: 'color-picker-' + index,
                            class: 'color-picker-container'
                        });

                        // Add the label and color picker to the color-palettes div
                        $('#color-palettes').append(label).append(colorPicker);

                        // Add input event to update the color of the selected layer in real-time
                        colorPicker.on('input', function () {
                            var selectedLayerIndex = parseInt($(this).attr('id').split('-').pop());
                            var selectedLayer = canvas.getObjects()[selectedLayerIndex];
                            if (selectedLayer) {
                                selectedLayer.set('fill', $(this).val());
                                canvas.renderAll();
                            }
                        });
                    });

                    canvas.renderAll();
                });

                // Update color picker and text settings when a layer is selected
                canvas.on('object:selected', function (e) {
                    var activeObject = e.target;
                    var selectedIndex = canvas.getObjects().indexOf(activeObject);

                    // Highlight the corresponding color picker
                    $('#color-palettes input').each(function () {
                        $(this).parent().removeClass('highlighted');
                    });

                    $('#color-picker-' + selectedIndex).parent().addClass('highlighted');

                    // Update the text, text color, and font family for the selected text layer
                    if (activeObject.type === 'textbox') {
                        $('#logo-text').val(activeObject.text || '');
                        $('#text-color').val(activeObject.fill || '#000000');
                        $('#font-family').val(activeObject.fontFamily || 'Arial');
                        $('#italic-text').toggleClass('active', activeObject.fontStyle === 'italic');
                        $('#bold-text').toggleClass('active', activeObject.fontWeight === 'bold');
                        $('#small-text').toggleClass('active', activeObject.fontSize && activeObject.fontSize < 20);
                        $('#caps-text').prop('checked', activeObject.textTransform === 'uppercase');
                        $('#text-curve').prop('checked', activeObject.get('path') ? true : false);
                        $('#text-outline').prop('checked', activeObject.stroke ? true : false);
                        $('#text-shadow').prop('checked', activeObject.shadow ? true : false);
                    } else {
                        $('#logo-text').val('');
                        $('#text-color').val('');
                        $('#font-family').val('Arial');
                        $('#italic-text').removeClass('active');
                        $('#bold-text').removeClass('active');
                        $('#small-text').removeClass('active');
                        $('#caps-text').prop('checked', false);
                        $('#text-curve').prop('checked', false);
                        $('#text-outline').prop('checked', false);
                        $('#text-shadow').prop('checked', false);
                    }
                });

                // Deselect object
                canvas.on('before:selection:cleared', function () {
                    $('#logo-text').val('');
                    $('#text-color').val('');
                    $('#font-family').val('Arial');
                    $('#color-palettes input').each(function () {
                        $(this).parent().removeClass('highlighted');
                    });
                    $('#italic-text').removeClass('active');
                    $('#bold-text').removeClass('active');
                    $('#small-text').removeClass('active');
                    $('#caps-text').prop('checked', false);
                    $('#text-curve').prop('checked', false);
                    $('#text-outline').prop('checked', false);
                    $('#text-shadow').prop('checked', false);
                });

                // Update the text for the selected textbox
                $('#logo-text').on('input', function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        activeObject.set('text', $(this).val());
                        canvas.renderAll();
                    }
                });

                // Update the text color for the selected textbox
                $('#text-color').on('input', function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        activeObject.set('fill', $(this).val());
                        canvas.renderAll();
                    }
                });

                // Update the font family for the selected textbox
                $('#font-family').change(function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        activeObject.set('fontFamily', $(this).val());
                        canvas.renderAll();
                    }
                });

                // Toggle italic text
                $('#italic-text').click(function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        var newFontStyle = activeObject.fontStyle === 'italic' ? '' : 'italic';
                        activeObject.set('fontStyle', newFontStyle);
                        $(this).toggleClass('active', newFontStyle === 'italic');
                        canvas.renderAll();
                    }
                });

                // Toggle bold text
                $('#bold-text').click(function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        var newFontWeight = activeObject.fontWeight === 'bold' ? '' : 'bold';
                        activeObject.set('fontWeight', newFontWeight);
                        $(this).toggleClass('active', newFontWeight === 'bold');
                        canvas.renderAll();
                    }
                });

                // Delete selected layer
                $('#delete-button').click(function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject) {
                        canvas.remove(activeObject)
                    }
                });

                // Toggle small text size
                $('#small-text').click(function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        var newSize = activeObject.fontSize < 20 ? 14 : 24;
                        activeObject.set('fontSize', newSize);
                        $(this).toggleClass('active', newSize < 20);
                        canvas.renderAll();
                    }
                });

                // Toggle all caps
                $('#caps-text').change(function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        var newTextTransform = $(this).is(':checked') ? 'uppercase' : 'none';
                        activeObject.set('textTransform', newTextTransform);
                        canvas.renderAll();
                    }
                });

                // Apply outline effect
                $('#text-outline').change(function () {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        if ($(this).is(':checked')) {
                            activeObject.set('stroke', $('#text-color').val());
                            activeObject.set('strokeWidth', 2);
                        } else {
                            activeObject.set('stroke', null);
                            activeObject.set('strokeWidth', 0);
                        }
                        canvas.renderAll();
                    }
                });

                // Apply shadow effect
                $('#text-shadow').change(function () {
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


                // Create the textbox with the session company value
                var sampleText1 = new fabric.Textbox(company, {
                    left: canvas.width / 2.5 - 57, // Position the text
                    top: canvas.height / 1.8 + 120, // Position the text
                    fontSize: 80,
                    fill: '#000000',
                    fontFamily: "{{ session('font') }}",
                    textAlign: 'center',
                    selectable: true,
                    evented: true
                });


                // // Add "Sample 2" text element
                // var sampleText2 = new fabric.Textbox('Slogan Here', {
                //     left: canvas.width / 2 - 40, // Position the text
                //     top: canvas.height / 2 + 180, // Position the text
                //     fontSize: 14,
                //     width: 80,
                //     fill: '#000000',
                //     fontFamily: 'Arial',
                //     textAlign: 'center',
                //     selectable: true,
                //     evented: true
                // });

                // Add the text elements to the canvas
                canvas.add(sampleText1);
                // canvas.add(sampleText2);
                canvas.renderAll();
            },
            error: function (xhr, status, error) {
                console.error("Error loading SVG:", status, error);
            }
        });
    }

    loadCarSVG();

    // load image

    // Handle SVG file upload
    $('#upload-logo').change(function (e) {
        var reader = new FileReader();
        reader.onload = function (event) {
            var svgString = event.target.result;

            // Clear the canvas and color palettes
            canvas.clear();
            $('#color-palettes').empty();

            // Load the SVG
            fabric.loadSVGFromString(svgString, function (objects, options) {
                // Calculate the center of the canvas
                var canvasCenter = {
                    left: canvas.width / 2,
                    top: canvas.height / 2
                };

                // Calculate the bounding box of the combined objects
                var boundingBox = new fabric.Group(objects).getBoundingRect();

                // Calculate the offset to center the bounding box
                var offset = {
                    left: canvasCenter.left - boundingBox.width / 2,
                    top: canvasCenter.top - boundingBox.height / 2
                };

                // Add each object to the canvas and adjust its position
                objects.forEach(function (obj, index) {
                    // Set the object position to center the bounding box
                    obj.set({
                        left: obj.left + offset.left - boundingBox.left,
                        top: obj.top + offset.top - boundingBox.top,
                        selectable: true,
                        evented: true
                    });
                    canvas.add(obj);

                    // Create a color picker for each layer
                    var colorPicker = $('<input/>', {
                        type: 'color',
                        id: 'color-picker-' + index,
                        value: obj.fill || '#000000',
                        class: 'form-control mt-2 colorPicker'
                    });

                    // Create a label for each color picker
                    var label = $('<label/>', {
                        for: 'color-picker-' + index,
                        class: 'color-picker-container'
                    });

                    // Add the label and color picker to the color-palettes div
                    $('#color-palettes').append(label).append(colorPicker);

                    // Add input event to update the color of the selected layer in real-time
                    colorPicker.on('input', function () {
                        var selectedLayerIndex = parseInt($(this).attr('id').split('-').pop());
                        var selectedLayer = canvas.getObjects()[selectedLayerIndex];
                        if (selectedLayer) {
                            selectedLayer.set('fill', $(this).val());
                            canvas.renderAll();
                        }
                    });
                });

                canvas.renderAll();
            });



            // Update color picker and text settings when a layer is selected
            canvas.on('object:selected', function (e) {
                var activeObject = e.target;
                var selectedIndex = canvas.getObjects().indexOf(activeObject);

                // Highlight the corresponding color picker
                $('#color-palettes input').each(function () {
                    $(this).parent().removeClass('highlighted');
                });

                $('#color-picker-' + selectedIndex).parent().addClass('highlighted');

                // Update the text, text color, and font family for the selected text layer
                if (activeObject.type === 'textbox') {
                    $('#logo-text').val(activeObject.text || '');
                    $('#text-color').val(activeObject.fill || '#000000');
                    $('#font-family').val(activeObject.fontFamily || 'Arial');
                    $('#italic-text').toggleClass('active', activeObject.fontStyle === 'italic');
                    $('#bold-text').toggleClass('active', activeObject.fontWeight === 'bold');
                    $('#small-text').toggleClass('active', activeObject.fontSize && activeObject.fontSize < 20);
                    $('#caps-text').prop('checked', activeObject.textTransform === 'uppercase');
                    $('#text-curve').prop('checked', activeObject.get('path') ? true : false);
                    $('#text-outline').prop('checked', activeObject.stroke ? true : false);
                    $('#text-shadow').prop('checked', activeObject.shadow ? true : false);
                } else {
                    $('#logo-text').val('');
                    $('#text-color').val('');
                    $('#font-family').val('Arial');
                    $('#italic-text').removeClass('active');
                    $('#bold-text').removeClass('active');
                    $('#small-text').removeClass('active');
                    $('#caps-text').prop('checked', false);
                    $('#text-curve').prop('checked', false);
                    $('#text-outline').prop('checked', false);
                    $('#text-shadow').prop('checked', false);
                }
            });

            // Deselect object
            canvas.on('before:selection:cleared', function () {
                $('#logo-text').val('');
                $('#text-color').val('');
                $('#font-family').val('Arial');
                $('#color-palettes input').each(function () {
                    $(this).parent().removeClass('highlighted');
                });
                $('#italic-text').removeClass('active');
                $('#bold-text').removeClass('active');
                $('#small-text').removeClass('active');
                $('#caps-text').prop('checked', false);
                $('#text-curve').prop('checked', false);
                $('#text-outline').prop('checked', false);
                $('#text-shadow').prop('checked', false);
            });

            // Update the text for the selected textbox
            $('#logo-text').on('input', function () {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    activeObject.set('text', $(this).val());
                    canvas.renderAll();
                }
            });

            // Update the text color for the selected textbox
            $('#text-color').on('input', function () {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    activeObject.set('fill', $(this).val());
                    canvas.renderAll();
                }
            });

            // Update the font family for the selected textbox
            $('#font-family').change(function () {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    activeObject.set('fontFamily', $(this).val());
                    canvas.renderAll();
                }
            });

            // Toggle italic text
            $('#italic-text').click(function () {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    var newFontStyle = activeObject.fontStyle === 'italic' ? '' : 'italic';
                    activeObject.set('fontStyle', newFontStyle);
                    $(this).toggleClass('active', newFontStyle === 'italic');
                    canvas.renderAll();
                }
            });

            // Toggle bold text
            $('#bold-text').click(function () {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    var newFontWeight = activeObject.fontWeight === 'bold' ? '' : 'bold';
                    activeObject.set('fontWeight', newFontWeight);
                    $(this).toggleClass('active', newFontWeight === 'bold');
                    canvas.renderAll();
                }
            });

            // Toggle small text size
            $('#small-text').click(function () {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    var newSize = activeObject.fontSize < 20 ? 14 : 24;
                    activeObject.set('fontSize', newSize);
                    $(this).toggleClass('active', newSize < 20);
                    canvas.renderAll();
                }
            });

            // Toggle all caps
            $('#caps-text').change(function () {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    var newTextTransform = $(this).is(':checked') ? 'uppercase' : 'none';
                    activeObject.set('textTransform', newTextTransform);
                    canvas.renderAll();
                }
            });

            // // Apply curve effect
            // $('#text-curve').change(function() {
            //     var activeObject = canvas.getActiveObject();
            //     if (activeObject && activeObject.type === 'textbox') {
            //         if ($(this).is(':checked')) {
            //             // Apply curve effect
            //             // Adjust these values to control the curve's appearance
            //             var curveRadius = 360; // Radius of the curve
            //             var curveFactor = 1.8; // The degree of the curve

            //             activeObject.set('angle', 0);
            //             var path = new fabric.Path('M 0 0 C 0 ' + (curveRadius * curveFactor) + ' ' + (activeObject.width * curveFactor) + ' ' + (activeObject.height * curveFactor) + ' ' + (activeObject.width) + ' 0', {
            //                 left: activeObject.left,
            //                 top: activeObject.top,
            //                 fill: '',
            //                 stroke: 'transparent',
            //                 selectable: false
            //             });

            //             canvas.add(path);
            //             canvas.bringToFront(path); // Ensure the path is behind the text

            //             // Apply the curve effect
            //             activeObject.set({
            //                 path: path
            //             });
            //         } else {
            //             // Remove the curve effect
            //             activeObject.set({
            //                 path: null
            //             });
            //         }
            //         canvas.renderAll();
            //     }
            // });


            // Apply outline effect
            $('#text-outline').change(function () {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    if ($(this).is(':checked')) {
                        activeObject.set('stroke', $('#text-color').val());
                        activeObject.set('strokeWidth', 2);
                    } else {
                        activeObject.set('stroke', null);
                        activeObject.set('strokeWidth', 0);
                    }
                    canvas.renderAll();
                }
            });

            // Apply shadow effect
            $('#text-shadow').change(function () {
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

        };
        reader.readAsText(e.target.files[0]);
    });

    // Add text to the canvas
    $('#add-text').click(function () {
        var text = new fabric.Textbox($('#logo-text').val(), {
            left: 100,
            top: 100,
            fill: $('#text-color').val(),
            fontFamily: $('#font-family').val(),
            fontSize: $('#small-text').hasClass('active') ? 14 : 24,
            fontWeight: $('#bold-text').hasClass('active') ? 'bold' : '',
            fontStyle: $('#italic-text').hasClass('active') ? 'italic' : '',
            textTransform: $('#caps-text').is(':checked') ? 'uppercase' : 'none',
        });
        canvas.add(text);
        canvas.renderAll();
    });

    // Save the canvas content as an image
    $('#save-logo').click(function () {
        var dataURL = canvas.toDataURL({
            format: 'png',
            quality: 1
        });
        var link = document.createElement('a');
        link.href = dataURL;
        link.download = 'logo.png';
        link.click();
    });

    // $('.redirect-to-pckgs-btn').click(function() {
    //     var dataURL = canvas.toDataURL({
    //         format: 'png',
    //         quality: 1
    //     });
    //     sessionStorage.setItem('logoDataUrl', dataURL)
    //     location.assign("/packages")
    // })

    // Delete the current logo
    $('#delete-logo').click(function () {
        canvas.clearmaker();
        $('#color-palettes').empty(); // Clear the color palettes
    });

    // Trigger color palette updates on canvas interactions
    canvas.on('after:render', function () {
        $('#color-palettes input').each(function () {
            var colorPickerId = $(this).attr('id');
            var index = parseInt(colorPickerId.split('-').pop());
            var layer = canvas.getObjects()[index];
            if (layer) {
                $(this).val(layer.fill || '#000000');
            }
        });
    });

    // Update logo color for non-text objects
    $('#logo-color').change(function () {
        var activeObject = canvas.getActiveObject();
        if (activeObject && activeObject.type !== 'textbox') {
            activeObject.set('fill', $(this).val());
            canvas.renderAll();
        }
    });

    // Update the background color for the canvas
    $('#background-color').on('input', function () {
        canvas.setBackgroundColor($(this).val(), canvas.renderAll.bind(canvas));
    });


});


        $(function() {
            // let dataURL = canvas.toDataURL({
            //     format: 'png',
            //     quality: 1
            // });

            $('.redirect-to-pckgs-btn').click(function() {
                let dataURL = canvas.toDataURL({
                    format: 'png',
                    quality: 1
                });
                sessionStorage.setItem('logoDataUrl', dataURL)
                location.assign("{{ route('packages') }}")
            })

            $('#save-logo').click(function() {
                @auth
                    let dataURL = canvas.toDataURL({
                        format: 'png',
                        quality: 1
                    });
                    fetch("{{ route('saveLogo') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            userId: {{ auth()->id() }},
                            productId: {{ session()->get('product-id') }},
                            logoString: dataURL,
                        })
                    })
                    // $.ajax({
                    //     url: "{{ route('saveLogo') }}",
                    //     method: 'POST',
                    //     headers: {
                    //         'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    //     },
                    //     data: {
                    //         userId: {{ auth()->id() }},
                    //         productId: {{ session()->get('product-id') }},
                    //         logoString: dataURL,
                    //     },
                    // })
                @endauth
            })
        })
    </script>
    <!----------------------------------------- footer ------------------------------->


    <!-----------------------------------------End footer ------------------------------->


@endsection
