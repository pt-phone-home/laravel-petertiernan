@extends('master')

@section('title')
    Peter Tiernan | Full Stack Web Developer &amp; Software Engineer
@endsection

@section('content')
<div>
    <div class="container mx-auto flex flex-col justify-center items-center">
        <h2 class="font-display text-3xl mt-24 tracking-wider font-bold text-center">Full Stack Web Developer, Software Engineer &amp; Designer</h2>

    </div>
    <div class="container mx-auto flex justify-center items-center pt-8">
        <div class="h-20r bg-rocket-green px-4 rounded-full py-4">
            <img src="/images/me.png" alt="" class="h-full w-auto object-cover rounded-full shadow-lg">
        </div>
    </div>
    <div class="container mx-auto flex justify-center items-center pt-6">
        <h4 class="font-body text-xl text-center">I love to design and build applications from the ground up!</h4>
    </div>
</div>
<div class="flex flex-wrap mt-4 bg-rocket-green py-8">
    <div class="w-full lg:w-1/2 flex justify-center items-center">
        <div class="py-16">
            <h2 class="text-gray-100 text-3xl font-display text-center mb-4">Hi, I'm Peter</h2>
            <p class="text-gray-100 px-16 text-center tracking-wide text-lg">I have been freelancing as a developer for just over 2 years now. During the day, I work as full-time academic in the areas of educational technology, e-learning, and innovation. To-date, my freelancing career has involved working with mainly SME clients - developing web applicaitons and software solutions. However, I am happy to work the clients from any sector.</p>
        </div>
    </div>
    <div class="w-full lg:w-1/2 flex justify-center items-center">
        <div class="py-16 flex flex-col">
            <h2 class="text-gray-100 text-3xl font-display text-center mb-6">Technologies I work with</h2>
            <div class=" flex flex-wrap justify-center px-16">
                <div class="w-24">
                    <i class="fab fa-html5 text-6xl text-gray-100"></i>
                </div>
                <div class="w-24">
                    <i class="fab fa-css3-alt text-6xl text-gray-100"></i>
                </div>
                <div class="w-24">
                    <i class="fab fa-php text-6xl text-gray-100"></i>
                </div>
                <div class="w-24">
                    <i class="fab fa-laravel text-6xl text-gray-100"></i>
                </div>
                <div class="w-24">
                    <i class="fab fa-js-square text-6xl text-gray-100"></i>
                </div>
                <div class="w-24">
                    <i class="fab fa-vuejs text-6xl text-gray-100"></i>
                </div>

            </div>
        </div>
    </div>
</div>
<div>
    <div class="container mx-auto flex flex-wrap justify-center mt-2">
        <div class="w-full sm:w-1/2 lg:w-1/3 flex ">
            <div class="flex flex-col mx-2 px-4 py-4 border-2 border-rocket-green rounded-lg">
                <div class="flex justify-center items-center mb-2 text-5xl text-rocket-green">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-center text-xl">Technical Skills</h3>
                <hr class="w-full border border-rocket-green mt-6">
                <div>
                    <p class="px-4 text-center">I really enjoy writing code and solving problems. I am always learning new skills, languages and approaches. Here are some technologies that I am using currently.</p>
                </div>
                <hr class="w-full border border-dashed border-rocket-green mt-2">
                <div class="text-center">
                    <ul class="list-rest">
                        <li class="pt-1">HMTL 5</li>
                        <li class="pt-1">CSS3</li>
                        <li class="pt-1">JavaScript</li>
                        <li class="pt-1">PHP</li>
                        <li class="pt-1">Laravel Framework</li>
                        <li class="pt-1">VueJS</li>
                        <li class="pt-1">Tailwind CSS</li>
                        <li class="pt-1">GSAP Animation</li>
                        <li class="pt-1">Git &amp; GitHub</li>
                        <li class="pt-1">Netlify</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 flex">
            <div class="flex flex-col mt-2 sm:mt-0 mx-2 px-4 py-4 border-2 border-rocket-green rounded-lg">
                <div class="flex justify-center items-center mb-2 text-5xl text-rocket-green">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="text-center text-xl">Education &amp; Qualifications</h3>
                <hr class="w-full border border-rocket-green mt-6">
                <div>
                    <p class="px-4 text-center">On a personal and professional level, I believe that education is the key to success and growth. I have been learning my whole life and will continue to do so. Some of my qualifications and achievements are listed below</p>
                </div>
                <hr class="w-full border border-dashed border-rocket-green mt-2">
                <div class="text-center">
                    <ul class="list-rest">
                        <li class="pt-1">B.Sc. in Entrepreneurship</li>
                        <li class="pt-1">M.Sc. in E-learning</li>
                        <li class="pt-1">PhD in Educational Computing</li>
                        <li class="pt-1">Diploma in Computer Science</li>
                        <li class="pt-1">Udemy PHP Course</li>
                        <li class="pt-1">Udemy VueJS Course</li>
                        <li class="pt-1">Udemy JavaScript Course x 2</li>
                        <li class="pt-1">Udemy Python Course</li>
                        <li class="pt-1">Udemy CSS Course</li>
                        <li class="pt-1">Udemy UX/UI Course</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 flex">
            <div class="flex flex-col mt-2 lg:mt-0 mx-2 px-4 py-4 border-2 border-rocket-green rounded-lg">
                <div class="flex justify-center items-center mb-2 text-5xl text-rocket-green">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-center text-xl">Soft Skills &amp; Competencies</h3>
                <hr class="w-full border border-rocket-green mt-6">
                <div>
                    <p class="px-4 text-center">Throughout my professional life I have dealt with a range of projects, people, circumstances, challenges, successes, and failures - all of which have taught me valuable skills which I bring to my freelancing work.</p>
                </div>
                <hr class="w-full border border-dashed border-rocket-green mt-2">
                <div class="text-center">
                    <ul class="list-rest">
                        <li class="pt-1">Interpersonal skills</li>
                        <li class="pt-1">Communication skills</li>
                        <li class="pt-1">Project management</li>
                        <li class="pt-1">Problem solving</li>
                        <li class="pt-1">Research</li>
                        <li class="pt-1">Teamwork</li>
                        <li class="pt-1">Initiative</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-6">
    <div class="container mx-auto py-12 bg-rocket-green rounded-lg">
        <div class="flex justify-around items-center">
            <div>
                <p class="text-2xl text-gray-100 font-display">Interested in working together?</p>
            </div>
            <div>
            <a href="{{route('contact.get')}}" class="border-2 border-gray-100 text-gray-100 hover:text-rocket-green rounded-lg px-2 bg-transparent hover:bg-gray-100 py-2">Get in touch</a>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container mx-auto flex flex-col justify-center items-center" id="myWork">
        <h3 class="py-4 font-display text-4xl mt-6">Web Applications</h3>
        <hr class="border-b-2 border-rocket-green w-2/5 mb-4">
    </div>
    <div class="container mx-auto flex flex-wrap" >

        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">My-Reminders.net</h5>
                <p class="mb-4">Laravel Application which sends email reminders for upcoming birthdays and important events.</p>
                <a href="https://www.my-reminders.net" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">KPI Dashboard</h5>
                <p class="mb-4">KPI Dashboard built using Laravel backend and Vue frontend</p>
                <a href="http://example.kpidashboards.eu/" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>

    </div>
</div>
<div>
    <div class="container mx-auto flex flex-col justify-center items-center" id="myWork">
        <h3 class="py-4 font-display text-4xl mt-6">Websites</h3>
        <hr class="border-b-2 border-rocket-green w-2/5 mb-4">
    </div>
    <div class="container mx-auto flex flex-wrap" >
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6 ">
                <h5 class="font-display mb-1 text-2xl mt-2">O'Mahony Meats</h5>
                <p class=" mb-4">Website for SME. Includes back-end built with Laravel where client can create news, recipe, careers, and offer items. Built using Laravel, TailwindCss and GSAP Animation.</p>
                <a href="https://www.omahonymeats.ie" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Rocket.Chip Web Solutions</h5>
                <p class="mb-4">Portfolio site for Web Development Company. Built with Laravel &amp; custom CSS</p>
                <a href="https://www.rocketchipwebsolutions.ie" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Ready Steady Go</h5>
                <p class="mb-4">Wordpress Site for childcare provider</p>
                <a href="http://www.readysteadygo.ie" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Truck & Trailer Works</h5>
                <p class="mb-4">Wordpress Site for HGV sales and services company</p>
                <a href="http://www.truckandtrailerworks.com" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Island Ferries</h5>
                <p class="mb-4">Wordpress website built for tour operator, includes booking system and payment integration</p>
                <a href="https://www.islandferries.net" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Woodvale Beds & Furniture</h5>
                <p class="mb-4">Wordpress Store built for online furniture store. Built with Elementor and Woocommerce</p>
                <a href="https://www.woodvalebedsandfurniture.com" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Drumcondra AFC</h5>
                <p class="mb-4">Football club website. Includes back-end where managers can add fixtures and news items. Build using Laravel, JavaScript &amp; custom CSS</p>
                <a href="https://www.drumcondrafc.com/" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Larry's DIY</h5>
                <p class="mb-4">Website for hardware store. Built using Laravel &amp; custom CSS</p>
                <a href="https://www.larrysdiy.ie" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Kable Kings</h5>
                <p class="mb-4">Wordpress Site built for digital communications business</p>
                <a href="https://www.kablekings.ie" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3">
            <div class="flex flex-col px-2 py-6">
                <h5 class="font-display mb-1 text-2xl mt-2">Pat Kelly Healing</h5>
                <p class="mb-4">Wordpress Site for healer and counsellor.</p>
                <a href="https://www.patkellyhealinghands.com" target="_blank" class="text-rocket-red text-lg">Visit Site</a>
            </div>
        </div>

    </div>
</div>
<div class="my-6">
        <div class="container mx-auto py-12 bg-rocket-green rounded-lg">
            <div class="flex justify-around items-center">
                <div>
                    <p class="text-2xl text-gray-100 font-display">Like what you see?</p>
                </div>
                <div>
                <a href="{{route('contact.get')}}" class="border-2 border-gray-100 text-gray-100 hover:text-rocket-green rounded-lg px-2 bg-transparent hover:bg-gray-100 py-2">Get in touch</a>
                </div>
            </div>
        </div>
    </div>
{{--<div>--}}
{{--    <div class="container mx-auto flex flex-col justify-center items-center">--}}
{{--        <h3 class="py-4 font-display text-4xl">What my clients say</h3>--}}
{{--        <hr class="border-b-2 border-rocket-green w-2/5 mb-4">--}}
{{--    </div>--}}
{{--    <div class="container mx-auto flex max-w-lg">--}}
{{--        <div class="w-full">--}}
{{--            <div class="border-2 border-rocket-green flex flex-col px-4 py-4 mb-8">--}}
{{--                <div class="flex py-8 w-full items-center">--}}
{{--                    <div class="h-auto w-1/5"><img src="/images/cityfarm.png" alt="" class="h-full w-full rounded-full border-2 border-rocket-green px-4 py-4"></div><h3 class="text-lg ml-8">St. Anne's City Farm</h3>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <p class="italic"> <br>--}}
{{--                        Thank you for St. Anne's City Farm's amazing website! We are absolutely delighted.--}}
{{--                        5 &star; service.--}}
{{--                        <br>--}}

{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="border-2 border-rocket-green flex flex-col px-4 py-4 mb-8">--}}
{{--                <div class="flex py-8 w-full items-center">--}}
{{--                    <div class="h-auto w-1/5"><img src="/images/logoifn.jpg" alt="" class="h-full w-full rounded-full border-2 border-rocket-green px-4 py-4"></div><h3 class="text-lg ml-8">Island Ferries</h3>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <p class="italic"> <br>--}}
{{--                        A huge thank you to Peter for doing an amazing job on our new website. Very professional and easy to deal with. We are really happy with the results.--}}
{{--                        <br>--}}

{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection

@section('scripts')
@parent

@endsection
