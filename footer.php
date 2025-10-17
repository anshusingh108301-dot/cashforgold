<!-- footer.php -->
<footer style="background-color:#1c1c1c; color:#fff; padding:50px 20px; font-family:Arial, sans-serif;">
    <div style="max-width:1200px; margin:0 auto; display:flex; flex-wrap:wrap; justify-content:space-between;">
        
        <!-- About Cash for Gold -->
        <div style="flex:1 1 250px; margin:10px;">
            <h3 style="color:#9A7F41;">Cash for Gold</h3>
            <p>Get instant cash for your gold with the best rates in the city. Safe, secure, and fast transactions for all types of gold jewelry.</p>
            <a href="contact.php" style="display:inline-block; margin-top:15px; padding:10px 20px; background-color:#9A7F41; color:#FFD700; text-decoration:none; font-weight:bold;">Get a Quote</a>
        </div>
        
        <!-- Quick Links -->
        <div style="flex:1 1 200px; margin:10px;">
            <h3 style="color:#FFD700;">Quick Links</h3>
            <ul style="list-style:none; padding:0;">
                <li><a href="index.php" style="color:#fff; text-decoration:none;">Home</a></li>
                <li><a href="about.php" style="color:#fff; text-decoration:none;">About Us</a></li>
                <li><a href="services.php" style="color:#fff; text-decoration:none;">Services</a></li>
                <li><a href="contact.php" style="color:#fff; text-decoration:none;">Contact Us</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div style="flex:1 1 250px; margin:10px;">
            <h3 style="color:#FFD700;">Contact Us</h3>
            <p>Email: info@cashforgold.com</p>
            <p>Phone: +91-9000000000</p>
            <p>Address: 456 Gold Street, City, Country</p>
        </div>

        <!-- Follow Us -->
        <div style="flex:1 1 200px; margin:10px;">
            <h3 style="color:#FFD700;">Follow Us</h3>
            <div style="display:flex; gap:15px; margin-top:10px;">
                <a href="#" target="_blank" style="color:#FFD700; font-size:22px;">&#x1F30E;</a>
                <a href="#" target="_blank" style="color:#FFD700; font-size:22px;">&#x1F426;</a>
                <a href="#" target="_blank" style="color:#FFD700; font-size:22px;">&#x1F4F7;</a>
            </div>
        </div>

    </div>

    <div style="text-align:center; margin-top:40px; border-top:1px solid #444; padding-top:20px; font-size:14px;">
        &copy; <?php echo date('Y'); ?> Cash for Gold. All rights reserved.
    </div>
</footer>

<!-- Responsive Styling -->
<style>
    @media(max-width:768px){
        footer div { flex:1 1 100%; margin-bottom:20px; }
    }
    footer a:hover { color:#fff; }
</style>
