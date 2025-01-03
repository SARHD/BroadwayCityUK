<?php
/**
 * Template Name: faq
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/FAQ.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
<div class="container-fluid">
    <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-start ">
        <h2 class="banner-heading " loading="eager loading">Got a question?<br>Get your answer</h2>
        <h3 class="banner-subheading text-16">Ask our experts anything about Broadway City Gwadar.</h3>
        <?php get_template_part('form-faq'); ?>
    </div>
</div>
</div>
</div>
<!---------------------------------------------Accordion Section------------------------------------------------------------------>

<div class="container-fluid my-5 py-5">
  <div class="accordion accordion-flush" id="accordionExample">
    <div class="accordion-item bg-dark border-gold">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="numaricaccordion">1</span> Why should I choose Broadway City Gwadar (BCG)?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
          Broadway City is simply the very best housing society in Gwadar and a highly trusted brand, a modern icon of living spread over 165 acres of prime land located on Central Boulevard, in the heart of Gwadar City Centre. Its key advantages are:
          <ul class="mt-2 text-13">
            <li>A development brand that is highly trusted</li>
            <li>Its prime central location and accessibility</li>
            <li>Its low density of development in comparison with overbuilt competitors</li>
            <li>More amenities and green space</li>
            <li>The mix of the density of the low, medium, and high, plus commercial provides housing for every type of investor and homeowner</li>
            <li>The quality of the planning design by Zavia founded on modern sustainable policy</li>
            <li>No hidden costs including development fee fully open and fully transparent</li>
            <li>No non-utilization penalties if you choose not to build</li>
            <li>Full-service level agreement with every sale</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">2</span> Why invest in Gwadar?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        There are multiple good reasons for investing in Gwadar Port and its Smart City. Which include;
        <ul class="mt-2 text-13">
            <li>Gwadar offers higher returns on a lower-cost investment than more mature locations</li>
            <li>It is a new and growing city with a plan to grow to 2 million people</li>
            <li>It will have world-class communication links</li>
            <li>It will be a modern and attractive place to live in</li>
            <li>It will be a regional logistics hub that will have a thriving business district</li>
            <li>It is one of the world’s deepest natural seaports on the Arabian sea</li>
            <li>It will have a new international airport that will link it to the world</li>
            <li>It will be a great place to live and work</li>
            <li>It will benefit from the $62 billion of investment between China and Pakistan</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">3</span> What is the current development of Gwadar?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Given the unique availability of Gwadar’s natural deep-sea port and the need of China and Pakistan to manufacture and export goods to the world in an efficient and effective manner all of the infrastructure being built in Gwadar and beyond is geared for development to accelerate Gwadar’s rapid development and growth.<br><br>
        The population has already grown from 80,000 to 150,000 in a number of years and set to grow to 300,000 by 2025 and 2 million by 2050
        <br><br>
        The Gwadar Development Authority Master Plan 2017 to 2050 has set out clear priorities for phased development. Housing societies have already been built in some areas closer to the bay and the smart city society developments have started to build their infrastructures such as tree-lined roads, sewerage, street lighting, grass verges, footpaths, parks, open spaces, leisure sites, mosques, and clubhouses.
        <br><br>
        Key developments such as the New Gwadar International Airport, a 300 MW power station, and a high-volume desalination plant are all important parts of the development infrastructure.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">4</span> What is the real estate potential of Gwadar?
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        The real estate potential of Gwadar is high due to the size, scale, and planned nature of its development
        <br><br>
        The Gwadar Master Plan has set out a clear vision for jobs growth, population growth, residential building growth, and infrastructure
        <br><br>
        The real estate potential is underpinned by the New Gwadar International Airport due for completion in 2023. As soon as people are easily able to travel to Gwadar then investment, jobs, and population growth will follow.
        <br><br>
        The designation of Gwadar as a Special Economic Zone which offers businesses 23 years of tax free investment will create jobs, which will in turn drive population growth and real estate demand
        <br><br>
        Like all real estate potential the earlier you invest the higher the potential for high returns depending on when you choose to sell.
        <br><br>
        What is the current development status of Gwadar?
        <br><br>
        Given the unique availability of Gwadar’s natural deep sea port and the need of China and Pakistan to manufacture and export goods to the world in an efficient and effective manner all of the infrastructure being built in Gwadar and beyond is geared for development to accelerate Gwadar’s rapid development and growth.
        <br><br>
        The population has already grown from 80,000 to 150,000 in a number of years and is set to grow to 300,000 by 2025 and 2 million by 2050
        <br><br>
        The Gwadar Development Authority Master Plan 2017 to 2050 has set out clear priorities for phased development. Housing societies have already been built in some areas closer to the bay and the smart city society developments have started to build their infrastructures such as tree-lined roads, sewerage, street lighting, grass verges, footpaths, parks, open spaces, leisure sites, mosques, and clubhouses.
        <br><br>
        Key developments such as the New Gwadar International Airport, a 300 MW power station, and a high-volume desalination plant are all important parts of the development infrastructure.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">5</span> How safe is Gwadar?
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Gwadar is the highest priority project of the Pakistan government so accordingly has prioritized the safety and security of Gwadar Port and the new Gwadar smart city to a much higher standard than any other part of Pakistan. It benefits from a security perimeter fence and is a designated weapons-free zone.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">6</span> What kind of land is listed on your website?
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        We list a range of plots of land to suit your need;
        <br><br>
        125 square yards
        <br><br>
        250 square yards
        <br><br>
        500 square yards
        <br><br>
        1000 square yards commercial up to 250ft or 22/23 floors
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">7</span> How is my investment in Broadway City Gwadar secured?
        </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        As per the new laws of Gwadar Development Authority (GDA), they will retain 30% of the housing society’s stock of land to ensure that investors’ money is secure until such time the development is completed. This is linked to a schedule of works for the society that obliges Broadway City to ensure that progress is made in line with that agreed with the GDA.
        <br><br>
        Broadway City is one of the few societies that have been granted a Naya Pakistan scheme for part of its society thus providing additional certainty and confidence shown by the government.
        <br><br>
        In addition, once a plot of land has been sold GDA will confirm within 45 days that the plot has been designated to the owner, thus providing further protection so plots cannot be transferred or sold to someone else or duplicated.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingEight">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">8</span> What is the past experience of Broadway City Gwadar Developer?
        </button>
      </h2>
      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Milestone is the developer of BCG with a few generations of family who has successful experience in building, developing land, and property sales. It has partnered with NK Corporation and has been active in land sales across Karachi and Baluchistan. Our International office headquartered in the UK is led by a former CEO of an award-winning recruitment company who has carried out property development and investment in the UK and Pakistan, he is supported by a former assistant director of local government in the United Kingdom.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingNine">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">9</span> How can I check that the project Broadway City is registered with GDA?
        </button>
      </h2>
      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        You can validate the BCG status on the official website of Gwadar Development Authority through below-mentioned link quoting our NOC number: 47/06/HS/GDA <?php echo '<a href="https://gda.gov.pk/noc/" target="_blank">Gwadar Development Authority (gda.gov.pk)</a>';?>

        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">10</span> How can I register/authenticate my land with Gwadar Development Authority?
        </button>
      </h2>
      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Your purchased plot of land will be registered by the developer of Broadway City in the office of Gwadar Development Authority. After the registration, you will get a notification on your provided cell number & email from the government office against the authenticity of your purchased property.
        </div>
      </div>
    </div>
  </div>
</div>

<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>
