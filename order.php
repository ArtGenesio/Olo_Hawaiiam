<?php
    include('partials/header.php')
?>

    <main>
        <div class="main_container_below_header">
            <div id="order_input_div">
                <form onsubmit="send_Email(); reset(); return false;">
                    <input type="text" placeholder="Phone number" id="phone" name="phone" required minlength="9" maxlength="9">
                    <input type="text" placeholder="Name & Surname" id="name" name="name" required>
                    <input type="text" placeholder="E-mail" id="mail" name="mail" required>
                    <input type="text" placeholder="Full adress" id="adress" name="adress" required>
                    <textarea type="text" placeholder="Your order" id="order" name="order" ></textarea>
                    <div id="order_input_buttons">
                    <button type="submit" class="cta_button" style="margin-left: 0; margin-right: 30px;">Order</button>
                    <button type="button" class="cta_button" style="margin-left: 0px;" onclick="window.location.href = 'index.php#menu_text'">Menu</button>
                </form>
                
                </div>
            </div>
            
            
            
            <img class="main_img_on_background" style="margin-top: -100px; z-index: -1; float:right"src="images/order_graphic_1.png">
        </div>
    </main>
    <script src="js/contact_form.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="js/linking.js"></script>
</body>

</html>