<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipet</title>
    <style>
@import url(style.css);
@import url(responsive-code.css);





    </style>
</head>

<body>
    <?php 
include "header.php"; 
?> 

   

    <section id="hero-section">
        <div>
            <h1>Fast, Safe & Affordable Delivery With Shipet</h1>
            <div id="trackid-search">
                <input type="text" placeholder="Enter Track ID">

                <button> <img src="Icons/search.png" alt="SearchIcon" width="24px"> Search</button>
            </div>
        </div>


    </section>

    <script>
    const heroSection = document.getElementById("hero-section");
    const images = [
        "Images/BannerBackground.png",
        "Images/Red Blue Modern Logistic Presentation.png",
        "Images/Banner-background3.png"
    ];
    let currentIndex = 0;

    function changeBackground() {
        heroSection.style.backgroundImage = `url('${images[currentIndex]}')`;
        currentIndex = (currentIndex + 1) % images.length;
    }

    // Start the slideshow
    changeBackground();
    setInterval(changeBackground, 5000); // Change image every 5 seconds
</script>


<section id="feature-section">
    <div class="feature-box">
        <img src="Icons/express.png" alt="express">
        <h3>Express</h3>
        <p>Fast and secure air delivery option for urgent, time-senstive parcels over long distances.</p>
    </div>
    <div class="feature-box">
        <img src="Icons/surface.png" alt="surface">
        <h3>Surface</h3>
        <p>Reliable and cost-effective ground transport for large or bulk shipments across cities and states.</p>
    </div>
    <div class="feature-box">
        <img src="Icons/hyperlocal.png" alt="hyperlocal">
        <h3>Hyper Local</h3>
        <p>Super quick and efficient same-day delivery within city limits, perfect for lightweight or important packages.</p>
    </div>
</section>

<section id="getstarted-section">
    <div>
        <h2>Welcome to Shipet- Your Trusted Delivery Partner</h2>
        <p>At Shipet, we are on a mission to simplify, affordable and speed up the way parcels move from city to city, state to state, and even across borders. Whether you're sending a personal gift to a loved one or shipping important business documents, we make sure your packages reaches its destination safely, quickly and affordably</p>
        <button>Get Started Now</button>
    </div>
    <img src="Images/GetStarted.png" alt="GetStarted" width="500px">
</section>

<section id="deliverpartner-section">
    <img src="Images/DeliveryPartner.png" alt="delievrypartner" width="500px">
    <div>
        <h2>Why Shipet Your Perfect Delivery Partner?</h2>
        <p>Shipet ensures timely, affordable, and reliable parcel deliveries across cities, states, and countries with real-time tracking and dedicated customer support.</p>
        <ol>
            <li><spam>Affordable Pricing:  </spam> Quality service doesn’t have to break the bank. Our pricing is transparent and cost-effective.</li>
            <li><spam>  Reliable Service:  </spam> We understand the value of your time and trust. That's why we ensure timely deliveries with real-time tracking.</li>
            <li><spam>Customer-Centric Approach: </spam>  Our support team is always here to help you, every step of the way.</li>
        </ol>
    </div>
</section>

<section id="logisticdeliver-section">

    <h2>Your Logistics Deliver Better with Shipet</h2>
    <p>Make your delivery process better with smart features designed for faster and easier shipping.</p>
   <div>
    <div class="logistic-box">
        <img src="Icons/express.png" alt="express">
        <h3> SmartSync Orders</h3>
        <p>Automatically sync and manage orders from multiple platforms in one place  organized.</p>
    </div>
    <div class="logistic-box">
        <img src="Icons/express.png" alt="express">
        <h3>SpeedX Delivery</h3>
        <p>Deliver at lightning speed! Impress your customers with next-day shipping that converts and retains.</p>
    </div>
    <div class="logistic-box">
        <img src="Icons/express.png" alt="express">
        <h3>PreCheck+</h3>
        <p>Ensure accuracy before dispatch — verify orders and addresses to minimize failed deliveries.</p>
    </div>
    <div class="logistic-box">
        <img src="Icons/express.png" alt="express">
        <h3>Shipet Success Partners</h3>
        <p>Our dedicated advisors work with you to optimize shipping strategies and solve delivery roadblocks fast.</p>
    </div>

   </div>
   
</section>
<section id="specialfeature-section">
    <h2>Shipet’s special features that make delivery better and easier</h2>
    <div>
        
        <div class="specialfeature-box">
            <div>
                <img src="Icons/express.png" alt="" width="50px" >
                <img src="Icons/arrowupright.png" alt="arrow" width="50px">

            </div>
            <h5>Real-Time Tracking for Every Shipment></h5>
            <p>Our experienced team delivers tailored logistics solutions for safe, timely shipments. </p>
        </div>
        <div class="specialfeature-box">
            <div>
                <img src="Icons/express.png" alt="" width="50px" >
                <img src="Icons/arrowupright.png" alt="arrow" width="50px">

            </div>
            <h5>Easy Returns Management System</h5>
            <p>Our advanced tracking systems provide real-time updates, ensuring complete visibility.</p>
        </div>
        <div class="specialfeature-box">
            <div>
                <img src="Icons/express.png" alt="" width="50px" >
                <img src="Icons/arrowupright.png" alt="arrow" width="50px">

            </div>
            <h5>Affordable & Transparent Pricing Plans</h5>
            <p>Enjoy clear and transparent pricing without hidden fees, maximizing your budget for logistics . </p>
        </div>
        <div class="specialfeature-box">
            <div>
                <img src="Icons/express.png" alt="" width="50px" >
                <img src="Icons/arrowupright.png" alt="arrow" width="50px">

            </div>
            <h5>24/7 Availability</h5>
            <p>Our dedicated support team is available around the clock to assist you with any questions. </p>
        </div>

    </div>
</section>

<section id="courierPartner-section">
    <h3>Our Trusted Courier Partners </h3>
    <div  >
        <img src="Icons/express.png" alt="">
        <img src="Icons/hyperlocal.png" alt="">
        <img src="Icons/surface.png" alt="">
       
        <img src="Icons/hyperlocal.png" alt="">
        <img src="Icons/surface.png" alt="">

        
       
   
    </div>
   
</section>

<section id="FAQ-section">
    
<h3>Frequently Asked Questions</h3>
<p>Your Questions Answered</p>
  
    <div class="QueAndAns">
        <div class="que"><h4>What is the purpose of this website?</h4> 
        <img src="Icons/expandarrow.png" alt="arrow" width="20px" class="FQAexpandarrow"></div>
        <div class="ans ">   <p>To easy shipment</p></div>
     
    </div>
    <div class="QueAndAns">
        <div class="que"><h4>How can I contact support?</h4> 
        <img src="Icons/expandarrow.png" alt="arrow" width="20px" class="FQAexpandarrow"></div>
        <div class="ans ">   <p>To reach our support team, please fill out the contact form located on our 'Contact Us' page, or send us an email at support@example.com for immediate assistance.</p></div>
     
    </div>
    <div class="QueAndAns">
        <div class="que"><h4>What services do you provide?</h4> 
        <img src="Icons/expandarrow.png" alt="arrow" width="20px" class="FQAexpandarrow"></div>
        <div class="ans ">   <p>We offer a range of services including web design, digital marketing, and content creation tailored to help businesses grow and flourish in the digital world.</p></div>
     
    </div>
    <div class="QueAndAns">
        <div class="que"><h4>Is there a subscription fee?</h4> 
        <img src="Icons/expandarrow.png" alt="arrow" width="20px" class="FQAexpandarrow"></div>
        <div class="ans ">   <p>No, we believe in transparency. Our services are pay-as-you-go, allowing you to choose what you need without any hidden fees or surprise charges.</p></div>
     
    </div>
    <div class="QueAndAns">
        <div class="que"><h4>Can I cancel my subscription anytime?</h4> 
        <img src="Icons/expandarrow.png" alt="arrow" width="20px" class="FQAexpandarrow"></div>
        <div class="ans ">   <p>Absolutely! You can cancel your subscription at any time without penalties. We value your trust and want to make your experience seamless.</p></div>
     
    </div>
    <div class="QueAndAns">
        <div class="que"><h4>Where can I find tutorials or guides?</h4> 
        <img src="Icons/expandarrow.png" alt="arrow" width="20px" class="FQAexpandarrow"></div>
        <div class="ans ">   <p>Our comprehensive resource center contains a variety of tutorials and guides designed to help you navigate our services and maximize their benefits.</p></div>
     
    </div>



</section>

    <?php 
    include "footer.php"; 
    ?> 

    <script src="script.js">

    </script>
</body>

</html>