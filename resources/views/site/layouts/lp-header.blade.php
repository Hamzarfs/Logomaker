<style>
    .top-head {
        color: white;
        background: #6868D1;


    }

    .top-head-logo {
        color: white;
        background: #080A2D;
        padding: 20px 0;

    }


    .top-head a {

        text-decoration: none;
    }

    .top-head a {

        text-decoration: none;
    }

    @media(max-width: 376px) {
        .top-head {
            background: #6868D1;
            padding: 5px 0;
            font-size: 10px;
        }

    }

    @media only screen and (max-width: 768px) {
        .top-head {
            background: #6868D1;
            padding: 5px 0;
            font-size: 12px;
        }
        a.toll_icon.text-white.d-flex.align-items-center {
        font-size: 1.0rem;
    }
    }
</style>

<div class="top-head">
    <div class="container">
        <div class="row">
            <div class="top-left col-md-7">

            </div>
            <div class="top-right col-md-5">
                <ul class="list-unstyled text-center" style="margin-top: 8px;">
                    <li class="d-inline-block mr-4">
                        <a class="toll_icon text-white d-flex align-items-center" href="tel:+15516665255">
                            <i class="fas fa-phone mr-2"></i>
                            +1 (551) 666-5255
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a class="chat_icon chat text-white d-flex align-items-center"
                        href="{{ url('https://wa.me/+18482369397') }}">
                            <i class="fas fa-comment mr-2"></i>
                            Live Chat with Expert
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="top-head-logo">
    <div class="container">
        <div class="row">
            <div class="top-left col-md-4">
                <img src={{ asset('images/rfswhitelogolp.png') }} alt="logo" />
            </div>
            <div class="top-rightlp col-md-8">
                <h5>
                    Need a logo? Let’s Discuss Your Idea with Logo Expert
                    <a href="javascript:void(0)" title="Get Free Consultancy" data-title="Get Free Consultancy"
                        class="avail-discount-btn custom-btn common-popup mb-3 mb-md-0" data-bs-toggle="modal"
                        data-bs-target="#contact-modal">
                        Get free consultancy
                    </a>
                </h5>
            </div>
        </div>
    </div>
</div>
