<?php
    /**
     * The template for displaying all pages
     *
     * This is the template that displays all pages by default.
     * Please note that this is the WordPress construct of pages
     * and that other 'pages' on your WordPress site may use a
     * different template.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package katppy
     */

    get_header();
?>

<main id="primary" class="site-main faq text-p">

    <div class="px-3 container mx-auto">
        <h2 class="text-h2">Frequently Asked Questions</h2>
        <section>
            <h3 class="text-h3">General Shop & Ordering</h3>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Where do you ship to?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>Katppy currently ships within the United States and Canada.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>What are your shipping costs and delivery times?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>We offer flat-rate shipping for all orders within the US and Canada. Enjoy free shipping on orders over $80 CAD.</p>
                        <p><span>Canada: </span>Shipped via Canada Post for a flat rate of $18 CAD, including tracking. Estimated delivery is 5-14 business days.</p>
                        <p><span>United States: </span>Shipped via Chit Chats for a flat rate of $12 USD, including tracking. Estimated delivery is 7-14 business days.</p>
                        <p>Orders are processed and shipped within 48 hours of payment confirmation. For more details, please see our <a href="page-shipping.php">Shipping and Return Policy.</a></p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>What payment methods do you accept?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>We accept Visa, MasterCard, and Debit cards.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Can I cancel or change my order?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>For more details, please see our <a href="page-shipping.php">Shipping and Return Policy.</a></p>
                        <p><span>Cancellations: </span>You may cancel your order for a full refund within 24 hours of confirmation. Please email us at katppy.shop@gmail.com to request a cancellation or fill out the <a href="page-contact.php">contact form.</a></p>
                        <p><span>Changes: </span>To change your order, please contact us via email at katppy.shop@gmail.com or fill out the <a href="page-contact.php">contact form</a> within 24 hours of placing your order. This will ensure we can process your request before shipping.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Do you accept returns or exchanges?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>For more details, please see our <a href="page-shipping.php">Shipping and Return Policy.</a></p>
                        <p><span>Resin Charms, Mystery Bags, and Crystal Beads: </span>Due to the nature of these items, we do not accept returns or exchanges.</p>
                        <p><span>Toy Figure Sets: </span>Our toy figures are often handmade and hand-painted, which may result in minor imperfections such as uneven coloring or slight scratches. These are not considered quality issues. However, if your figure set arrives with missing pieces (excluding damage caused during shipping), we will offer a replacement set (if available) or a store credit coupon for your next purchase.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>How do I contact customer service?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>For any questions, please email us at katppy.shop@gmail.com or fill out our <a href="page-contact.php">contact form.</a> We will respond within 48 hours.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Are your products safe for children?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>We recommend our products for children aged 7 and up. Some resin charms and other small items may pose a choking hazard for younger children. Please supervise children carefully when handling these items.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h3 class="text-h3">Flat Back Charms & Resin Charms</h3>
            
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>What materials are your flat back charms made of?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>Our resin and flat back charms are made of PVC resin.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>What should I do with those Charms?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>These charms can be used in various crafting projects.</p>
                        <p>You can:</p>
                        <ul>
                            <li>Use a mini drill to create a hole and attach a pin for earrings or keychains.</li>
                            <li>Adhere them to hair accessories like hair pins or clips, or to Croc button buckles for Croc charms, using super glue.</li>
                            <li>Decorate card top loaders, phone cases, and other items using whipped cream glue.</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Are the colors of the resin charms exactly as shown in the pictures?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>Due to variations in lighting and screen displays, the item's color may appear slightly different from the pictures.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h3 class="text-h3">Toy Figures</h3>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Are your toy figures authentic?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>Our inventory includes a mix of authentic and non-authentic toy figures. Please carefully review the product description before placing an order.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Do you sell toy figure sets, or individual pieces?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>We offer both sets and individual pieces, depending on the product. Please carefully review the product description before placing an order.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Are the toy figures made of plastic, resin, or another material?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>The toy figures are made of PVC resin.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h3 class="text-h3">Crystal Beads</h3>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>What types of crystal beads do you sell?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>We offer a diverse selection of crystal beads for crafting and jewelry making.</p>
                        <p>Our natural stone offerings include:</p>
                        <ul>
                            <li><span>Quartz varieties:</span> Clear quartz, rose quartz, amethyst, smoky quartz, and citrine.</li>
                            <li><span>Jasper varieties:</span> Red jasper, picture jasper, and dalmatian jasper.</li>
                            <li><span>Other natural stones:</span> Obsidian, jade, and agate.</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Are your crystal beads natural or synthetic?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>Our crystal beads are natural.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>What sizes and shapes are your crystal beads available in?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>We offer beads in 6mm, 8mm, and 10mm sizes, depending on the type of bead.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>How do I care for my crystal beads?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p><span>Gentle Cleaning:</span> Use a soft, damp cloth to gently wipe your crystal beads. Avoid harsh chemicals or abrasive cleaners. For deeper cleaning, use mild soap and water, rinse thoroughly, and pat dry with a soft cloth.</p>
                        <p><span>Avoid Harsh Chemicals:</span> Keep your crystal beads away from harsh chemicals, perfumes, and lotions.</p>
                        <p><span>Storage:</span> Store your crystal beads in a soft pouch or jewelry box, away from direct sunlight and other jewelry.</p>
                        <p><span>Energy Cleansing:</span> Methods include placing crystals under moonlight, sunlight (with caution), smudging, running water (if water-safe), or burying in salt (with caution).</p>
                        <p><span>Handling:</span> Avoid dropping or hitting your crystal beads, and handle them carefully when stringing.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Do you sell crystal bead strands or individual beads?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>The beads are sold in 7-inch bracelet strands.</p>
                        <p><span>6mm beads: </span>Approximately 25-28 beads per strand.</p>
                        <p><span>8mm beads: </span>Approximately 19-22 beads per strand.</p>
                        <p><span>10mm beads: </span>Approximately 16-18 beads per strand.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h3 class="text-h3">Blind Bag Toys</h3>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>What kind of toys are in your blind bags?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>Our handmade blind bags contain a variety of charms, including regular charms, flat back charms, 3D charms, and toy figures.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Are there any duplicates in the blind bags?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>Blind bags are selected randomly, so we cannot guarantee against duplicates.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-question">
                        <h4>Are the blind bags sealed?</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/images/down.svg" alt="Down Chevron">
                    </div>
                    <div class="accordion-answer">
                        <p>Yes, the blind bags are sealed.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <script>
        const accordionQuestion = document.querySelectorAll(".accordion-question");
        accordionQuestion.forEach((question) => {
            question.addEventListener("click", () => {
                const accordionItem = question.parentElement;
                const accordionContent = accordionItem.querySelector(".accordion-answer");

                const lastAccordionQuestion = accordionItem.closest(".accordion").querySelector(".accordion-item:last-of-type .accordion-question");
                const lastAccordionAnswer = accordionItem.closest(".accordion").querySelector(".accordion-item:last-of-type .accordion-answer");

                const accordionImg = question.querySelector('img');

                accordionContent.classList.toggle("active");

                if (accordionContent.classList.contains("active")) {
                    accordionContent.style.maxHeight = "100%";

                    if (accordionImg) {
                        accordionImg.remove();
                    }

                    const imgUp = document.createElement("img");
                    imgUp.src = "<?php echo get_template_directory_uri() ?>/images/up.svg";
                    imgUp.alt = "Up Chevron";
                    question.appendChild(imgUp);
                    
                    if (lastAccordionQuestion && lastAccordionAnswer.classList.contains("active")) {
                        lastAccordionAnswer.style.borderBottom = "3px solid #E9B44B";
                        lastAccordionQuestion.style.borderBottom = "unset";
                    }

                } else {
                    accordionContent.style.maxHeight = "0";


                    if (accordionImg) {
                        accordionImg.remove();
                    }

                    const imgDown = document.createElement("img");
                    imgDown.src = "<?php echo get_template_directory_uri() ?>/images/down.svg";
                    imgDown.alt = "Down Chevron";
                    question.appendChild(imgDown);

                    if (lastAccordionQuestion) {
                        lastAccordionQuestion.style.borderBottom = "3px solid #E9B44B";
                    }
                }
            })
        })
    </script>

</main><!-- #main -->

<?php
    get_footer();
?>