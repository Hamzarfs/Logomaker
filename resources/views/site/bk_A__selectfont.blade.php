<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Welcome')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Moon+Dance&family=New+Rocker&family=Pacifico&family=Sancreek&family=Notable&family=Yesteryear&family=Zilla+Slab&family=Vidaloka&display=swap" rel="stylesheet">
<style>
body {
    font-family: Arial, sans-serif;
}





.mt-5{
    font-family: Poppins;
    font-size: 54px;
    font-weight: 700;
    text-align: left;
}
.nav-item {
    margin-right: 5px;
    font-weight: 700;
    color: black;
}
.main-section {
    background-color: #E9EDFF;
    padding: 20px;
    margin-bottom: 20px;
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
    transition: box-shadow 0.9s ease; /* Smooth transition for box-shadow */
}
.font-item:hover {
    box-shadow: 0 4px 8px rgba(46, 46, 46, 0.1); /* Box shadow on hover */
    border: 2px solid rgb(0, 0, 0);
}
.font-sample {
    font-size: 1.5em;
}
.selected {
    background-color: #6A70D6 !important;
    color: white;
}
footer {
    background-color: white;
    padding: 20px 0;
    text-align: center;
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


.main-section {
    background-color: #E9EDFF;
    padding: 20px;
    margin-bottom: 20px;
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
    transition: box-shadow 0.9s ease; /* Smooth transition for box-shadow */
}

.font-item:hover {
    box-shadow: 0 4px 8px rgba(46, 46, 46, 0.1); /* Box shadow on hover */
    border: 2px solid rgb(0, 0, 0);

}

.font-sample {
    font-size: 1.5em; $('.custom-button-online').prop('disabled', false).css('background-color', '');
}

.selected {
    background-color: #6a70d6 !important;
    color: white;
}

footer {
    background-color: white;
    padding: 20px 0;
    text-align: center;
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

   </style>
    <!----------------------------------------- Banner Section ------------------------------->
    <form id="fontForm" method="POST" action="{{ url('/store-session-data') }}">
        @csrf
        
        <input type="hidden" name="font" id="selectedFont"> <!-- Hidden field for the selected font -->

    <div class="main-section">
        <div class="container">
            <h1 class="mt-5">Select a font styles you like</h1>
            <p>Font choices define the look and feel of your logo</p>
            {{ session('company') }}
            {{ session('colors') }}
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="font-item" data-font="Montserrat">
                        <span class="font-sample" style="font-family: 'Montserrat';">Montserrat</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="font-item" data-font="Moon Dance">
                        <span class="font-sample" style="font-family: 'Moon Dance';">Moon Dance</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="font-item" data-font="New Rocker">
                        <span class="font-sample" style="font-family: 'New Rocker';">New Rocker</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="font-item" data-font="Pacifico">
                        <span class="font-sample" style="font-family: 'Pacifico';">Pacifico</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="font-item" data-font="Sancreek">
                        <span class="font-sample" style="font-family: 'Sancreek';">Sancreek</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="font-item" data-font="Notable">
                        <span class="font-sample" style="font-family: 'Notable';">Notable</span>
                    </div>
                </div>
                <div class="col-md-4"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Moon+Dance&family=New+Rocker&family=Pacifico&family=Sancreek&family=Notable&family=Yesteryear&family=Zilla+Slab&family=Vidaloka&display=swap" rel="stylesheet">
 

                    <div class="font-item" data-font="Yesteryear">
                        <span class="font-sample" style="font-family: 'Yesteryear';">Yesteryear</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="font-item" data-font="Zilla Slab">
                        <span class="font-sample" style="font-family: 'Zilla Slab';">Zilla Slab</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="font-item" data-font="Vidaloka">
                        <span class="font-sample" style="font-family: 'Vidaloka';">Vidaloka</span>
                    </div>
                </div>
            </div>
            <div id="text-section" class="p-3 border">
                <p>This is the text whose font will change based on your selection.</p>
            </div>
        </div>
    </div>
    </form>
        <!----------------------------------------- footer ------------------------------->

        <footer class="container">
        <div class="button-container">
            <button class="btn-back" id="backButton">
                <i class="bi bi-arrow-left"></i>Back
            </button>
            <button class="btn btn-secondary btn-next" id="nextButton"  >Next</button>
            </div>
    </footer>
        <!-----------------------------------------End footer ------------------------------->


    <!-- Bootstrap JS and dependencies -->
     
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    // Enable and style the Next button when a font item is clicked
    document.querySelectorAll('.font-item').forEach(function(item) {
        item.addEventListener('click', function() {
            // Add the 'selected' class to the clicked font item
            document.querySelectorAll('.font-item').forEach(function(i) {
                i.classList.remove('selected'); // Remove 'selected' class from all items
            });
            this.classList.add('selected'); // Add 'selected' class to the clicked item

            // Enable and style the Next button
            const nextButton = document.getElementById('nextButton');
            nextButton.style.backgroundColor = '#5540d9';
            nextButton.disabled = false;
        });
    });

    // Handle the Next button click event
    document.getElementById('nextButton').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission
alert("AAAAAAAAAAAAAAA");
        // Get the selected font
        var selectedFont = document.querySelector('.font-item.selected')?.getAttribute('data-font');

        if (selectedFont) {
            // Set the value of the hidden input field
            document.getElementById('selectedFont').value = selectedFont;

            // Submit the form
            document.getElementById('fontForm').submit();
        } else {
            alert("Please select a font.");
        }
    });

    // Handle the Back button click event
    document.getElementById('backButton').addEventListener('click', function() {
        window.history.back();
    });
</script>
@endsection
