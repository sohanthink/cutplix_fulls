<div id="contact" class="contact section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top_heading text-center">
                    <h2 class="common-heading">Say Hello!</h2>
                    <span class="common-paragraph pt-4">Drop Us a Line, We'd Love to Hear from</span>
                </div>
            </div>
            <div class="main">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="content">
                            <div class="left">
                                <div class="top">
                                    <h3 class="pt-5 ps-5">How to Reach Us</h3>
                                    <p class="pb-5 ps-5">Contacting Cutplix: Easy and Convenient</p>
                                </div>
                                <div class="middle">
                                    <ul class="ps-5">
                                        <li><i
                                                class="fa-solid fa-phone-volume pe-3"></i>{{ $setting->phone ? $setting->phone : '' }}
                                        </li>
                                        <li class="py-4"><i
                                                class="fa-regular fa-envelope pe-3"></i>{{ $setting->email ? $setting->email : '' }}
                                        </li>
                                        <li><i
                                                class="fa-solid fa-location-dot pe-3"></i>{{ $setting->address ? $setting->address : '' }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom py-5 ps-5">
                                    <a href="{{ $setting->twitter ? $setting->twitter : '#' }}"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="{{ $setting->instragram ? $setting->instragram : '#' }}"><i
                                            class="fa-brands fa-instagram mx-4"></i></a>
                                    <a href="{{ $setting->linked_in ? $setting->linked_in : '#' }}"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="right">
                            <div class="form">
                                <form action="{{ route('message.create') }}" method="post" role="form"
                                    class="">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1" class="form-label"><b>Name
                                                    *</b></label>
                                            <input type="text" class="form-control form-control2"
                                                placeholder="Enter Your Name" name="name" aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1" class="form-label"><b>Email
                                                    *</b></label>
                                            <input type="email" class="form-control form-control2" name="email"
                                                placeholder="Enter Your Email" aria-label="Last name">
                                        </div>
                                        <div class="new">
                                            <span><b>Select Subject?</b></span>
                                        </div>
                                        <div class="checkbox d-flex justify-content-between">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="subject" type="radio"
                                                    id="inlineCheckbox1" value="Video">
                                                <label class="form-check-label" for="inlineCheckbox1">Video</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="subject" type="radio"
                                                    id="inlineCheckbox2" value="Graphic Design">
                                                <label class="form-check-label" for="inlineCheckbox2">Graphic
                                                    Design</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="subject" type="radio"
                                                    id="inlineCheckbox3" value="Development">
                                                <label class="form-check-label"
                                                    for="inlineCheckbox3">Development</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="subject" type="radio"
                                                    id="inlineCheckbox4" value="Digital Marketing">
                                                <label class="form-check-label" for="inlineCheckbox4">Digital
                                                    Marketing</label>
                                            </div>
                                        </div>
                                        <div class="new">
                                            <span><b>Message*</b></span>
                                        </div>
                                        <div class="mb-3">
                                            <textarea name="message" class="form-control color-g" placeholder="Write A Message.." id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
                                        </div>
                                        <div class="text-end">
                                            <input class="contact_btn" type="submit" value="Submit Here">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
