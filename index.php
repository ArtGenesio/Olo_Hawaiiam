<?php
    include('partials/header.php')
?>

    <main>
        <div class="main_container_below_header">
            <div class="bold_text">
            <p style="margin-left: 100px;">Hawaii's </p>
            <p style="margin-left: 100px;">tastiest menu</p>
            <button type="button" onclick="menuScroll()"class="cta_button">Check</button>
            </div>
            <img class="main_img_on_background" style="margin-top: -100px; z-index: -1; float:right"src="images/cta_graphic.png">
        </div>
        <div id ="menu_text" class="main_container">
            <img class="main_img_on_background" style ="float: left"src="images/main_graphic_2.png">
            <div style="display: flex; flex-direction: column; align-items: center;justify-content: center;">
                    
                    
                        <p class="bold_text" style="text-align: center; margin-right: 100px; margin-bottom: 0px;">Vegetarian</p>
                        <p class="bold_text"style="text-align: center; margin-right: 100px;">Menu</p>
                    
                
                
                <p class="normal_text" style="text-align: center; margin-right: 100px;">top-quality ingredients</p>
                <p class="normal_text" style="text-align: center; margin-right: 100px;">local suppliers</p>
                <p class="normal_text" style="text-align: center; margin-right: 100px;">sustainable cultivation</p>
                <p class="normal_text" style="text-align: center; margin-right: 100px;">taste guarantee</p>
                <button type="button"  onclick="window.open('images/all_menu.pdf')" class="cta_button" style="margin-top: 40px; margin-bottom: 40px; margin-left: 0px; margin-right: 100px;">Download</button>
                
            </div>
            
            
        </div>

        <div class="main_container">

        <div style="display: flex; flex-direction: column; align-items: center;justify-content: center;">
                    
                    
                        <p class="bold_text" style="text-align: center; margin-left: 100px; margin-bottom: 0px;">Meat</p>
                        <p class="bold_text"style="text-align: center; margin-left: 100px;">Menu</p>
                    
                
                
                <p class="normal_text" style="text-align: center; margin-left: 100px;">top-quality ingredients</p>
                <p class="normal_text" style="text-align: center; margin-left: 100px;">local suppliers</p>
                <p class="normal_text" style="text-align: center; margin-left: 100px;">sustainable cultivation</p>
                <p class="normal_text" style="text-align: center; margin-left: 100px;">taste guarantee</p>
                <button type="button"   onclick="window.open('images/all_menu.pdf')" class="cta_button" style="margin-top: 40px; margin-bottom: 40px; margin-left: 100px; margin-right: 0;">Download</button>
                
            </div>
            <img class="main_img_on_background" style="float: right"src="images/main_graphic_3.png">
            
            
            
        </div>
            
        <div class="main_container" style="justify-content: center; align-items: center;">
            
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.0551435125058!2d-157.86052968255612!3d21.3088373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006e756c91dcd5%3A0xc9eebc91514c9d83!2sHawaii%20State%20Art%20Museum!5e0!3m2!1spl!2spl!4v1676554365016!5m2!1spl!2spl" width="80%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="location_div">
                <p class="bold">Location</p>
                <p>250 South Hotel St. Second Floor, 250 S Hotel St #5, Honolulu, HI 96813, United States of America</p>
                <p>Mon - San, 10 - 22</p>
                <p class="bold">Contact Us</p>
                
                <a href="mailto:olohawaiian@deskmail.com">Olohawaiian@deskmail.com</a>
                <p>+1 808 954 347</p>
            </div>
        
            
            
            
            
        </div>
        
        
    </main>
    <?php
    include('partials/footer.php')
?>
</body>
<script src="js/linking.js"></script>

</html>