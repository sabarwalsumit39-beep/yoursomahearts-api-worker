<?php
// ============================================================
// 🔥 ENCRYPTED API – DigitalOcean App Platform
// ============================================================

// 🔑 PASSPHRASE (Must match Loader)
$PASSPHRASE = "MySecretKey@123";

// 📄 YOUR FULL WEBSITE HTML (shop-content.html)
$HTML_CONTENT = <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>❤️</text></svg>" />
    <title>yoursomahearts</title>
    <style>
        /* ⚠️ PASTE YOUR FULL CSS HERE (your soma hearts styles) */
        *{margin:0;padding:0;box-sizing:border-box}body{font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;background:#fefcf8;color:#2d2a24;line-height:1.6}img{max-width:100%;height:auto;display:block}.container{max-width:1200px;margin:0 auto;padding:0 24px}.banner{min-height:90vh;display:flex;align-items:center;justify-content:center;text-align:center;background:linear-gradient(145deg,#f9f3ed 0%,#efe6dc 100%);padding:60px 24px;position:relative;overflow:hidden}.banner::after{content:"♥";position:absolute;font-size:320px;color:rgba(210,180,160,0.10);bottom:-60px;right:-40px;transform:rotate(12deg);pointer-events:none;font-family:serif}.banner-content{max-width:820px;position:relative;z-index:1}.banner-content .brand-name{font-size:4.2rem;font-weight:700;letter-spacing:2px;color:#4a3f36;margin-bottom:8px;font-family:'Georgia',serif}.banner-content .brand-name span{color:#b77d5e}.banner-content .subheading{font-size:1.8rem;font-weight:400;color:#6b5b4e;margin-bottom:20px;font-style:italic}.banner-content p{font-size:1.2rem;color:#5a4d40;max-width:680px;margin:0 auto;line-height:1.8}.banner-content .divider{width:80px;height:3px;background:#c9b09b;margin:22px auto 18px;border-radius:4px}.section-image-text{padding:80px 0;background:#fff}.section-image-text .grid{display:grid;grid-template-columns:1fr 1fr;gap:50px;align-items:center}.section-image-text .grid.reverse{direction:rtl}.section-image-text .grid.reverse>*{direction:ltr}.section-image-text .img-wrap{border-radius:24px;overflow:hidden;box-shadow:0 20px 40px -12px rgba(0,0,0,0.15);background:#e8ddd2}.section-image-text .img-wrap img{width:100%;height:380px;object-fit:cover;transition:transform .5s ease}.section-image-text .img-wrap img:hover{transform:scale(1.02)}.section-image-text .text-wrap h2{font-size:2.6rem;font-weight:600;color:#3d342c;margin-bottom:16px;font-family:'Georgia',serif}.section-image-text .text-wrap h2 span{color:#b77d5e}.section-image-text .text-wrap p{font-size:1.1rem;color:#5a4d40;line-height:1.8}.two-sections{padding:80px 0;background:#f8f4ef}.two-sections .grid-2{display:grid;grid-template-columns:1fr 1fr;gap:50px}.two-sections .card{background:#fff;padding:44px 38px;border-radius:24px;box-shadow:0 8px 30px rgba(0,0,0,0.04);transition:transform .3s ease,box-shadow .3s ease;border:1px solid #f0e8e0}.two-sections .card:hover{transform:translateY(-6px);box-shadow:0 20px 40px -8px rgba(0,0,0,0.08)}.two-sections .card h3{font-size:1.9rem;font-weight:600;color:#3d342c;margin-bottom:14px;font-family:'Georgia',serif}.two-sections .card h3 span{color:#b77d5e}.two-sections .card p{font-size:1.05rem;color:#5a4d40;line-height:1.8}.gallery-section{padding:80px 0;background:#fff}.gallery-section .gallery-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px}.gallery-section .gallery-grid .gallery-item{border-radius:20px;overflow:hidden;box-shadow:0 8px 24px rgba(0,0,0,0.06);transition:transform .4s ease,box-shadow .4s ease;background:#f0e8e0;aspect-ratio:1/1}.gallery-section .gallery-grid .gallery-item:hover{transform:scale(1.03);box-shadow:0 16px 40px -8px rgba(0,0,0,0.12)}.gallery-section .gallery-grid .gallery-item img{width:100%;height:100%;object-fit:cover}.final-section{padding:80px 0;background:#f8f4ef;text-align:center}.final-section .final-content{max-width:820px;margin:0 auto}.final-section h2{font-size:2.8rem;font-weight:600;color:#3d342c;font-family:'Georgia',serif;margin-bottom:18px}.final-section h2 span{color:#b77d5e}.final-section p{font-size:1.15rem;color:#5a4d40;line-height:1.9}.final-section .divider{width:70px;height:3px;background:#c9b09b;margin:22px auto 0;border-radius:4px}.footer{background:#2d2822;color:#d6cec4;padding:60px 24px 40px}.footer .footer-grid{display:grid;grid-template-columns:2fr 1fr 1.2fr;gap:40px;max-width:1200px;margin:0 auto}.footer .brand-footer h4{font-size:1.8rem;font-family:'Georgia',serif;color:#f0e8e0;margin-bottom:10px}.footer .brand-footer h4 span{color:#c9b09b}.footer .brand-footer p{font-size:.95rem;line-height:1.7;color:#b8aea2;max-width:280px}.footer .contact-info h5,.footer .policy-links h5{font-size:1.1rem;color:#f0e8e0;margin-bottom:16px;letter-spacing:.5px;font-weight:600}.footer .contact-info p{font-size:.95rem;margin-bottom:6px;color:#b8aea2}.footer .contact-info p strong{color:#d6cec4;font-weight:500}.footer .policy-links ul{list-style:none;padding:0}.footer .policy-links ul li{margin-bottom:10px}.footer .policy-links ul li a{color:#b8aea2;text-decoration:none;font-size:.95rem;transition:color .3s ease;position:relative;cursor:pointer}.footer .policy-links ul li a::after{content:'';position:absolute;left:0;bottom:-2px;width:0;height:1px;background:#c9b09b;transition:width .3s ease}.footer .policy-links ul li a:hover{color:#f0e8e0}.footer .policy-links ul li a:hover::after{width:100%}.footer .footer-bottom{border-top:1px solid #3d3832;margin-top:44px;padding-top:28px;text-align:center;font-size:.9rem;color:#9e9488;max-width:1200px;margin-left:auto;margin-right:auto}.footer .footer-bottom span{color:#c9b09b}.cookie-consent{position:fixed;bottom:0;left:0;right:0;background:#2d2822;color:#d6cec4;padding:16px 24px;box-shadow:0 -4px 20px rgba(0,0,0,0.25);z-index:10000;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:16px;font-size:.95rem;border-top:2px solid #c9b09b;transition:transform .4s ease,opacity .4s ease}.cookie-consent.hidden{transform:translateY(100%);opacity:0;pointer-events:none}.cookie-consent p{margin:0;flex:1 1 300px;text-align:center}.cookie-consent a{color:#c9b09b;text-decoration:underline;cursor:pointer;font-weight:500;transition:color .2s}.cookie-consent a:hover{color:#f0e8e0}.cookie-consent .actions{display:flex;gap:12px;flex-wrap:wrap;justify-content:center}.cookie-consent .btn-accept{background:#c9b09b;border:none;padding:8px 28px;border-radius:40px;font-size:.95rem;font-weight:600;color:#2d2822;cursor:pointer;transition:background .2s,transform .1s;box-shadow:0 2px 8px rgba(0,0,0,0.15)}.cookie-consent .btn-accept:hover{background:#dcc8b8;transform:scale(1.02)}.cookie-consent .btn-accept:active{transform:scale(0.97)}.modal-overlay{display:none;position:fixed;inset:0;background:rgba(20,18,16,0.75);backdrop-filter:blur(6px);z-index:9999;justify-content:center;align-items:center;padding:24px;animation:fadeIn .3s ease}.modal-overlay.active{display:flex}@keyframes fadeIn{from{opacity:0;transform:scale(0.96)}to{opacity:1;transform:scale(1)}}.modal-content{background:#fefcf8;max-width:780px;width:100%;max-height:85vh;border-radius:32px;box-shadow:0 40px 80px -20px rgba(0,0,0,0.5);padding:48px 52px;position:relative;overflow-y:auto;scrollbar-width:thin;scrollbar-color:#c9b09b #f0e8e0}.modal-content::-webkit-scrollbar{width:6px}.modal-content::-webkit-scrollbar-track{background:#f0e8e0;border-radius:12px}.modal-content::-webkit-scrollbar-thumb{background:#c9b09b;border-radius:12px}.modal-close-btn{position:sticky;top:0;float:right;background:#f0e8e0;border:none;width:44px;height:44px;border-radius:50%;font-size:1.6rem;line-height:1;color:#4a3f36;cursor:pointer;transition:.2s;display:flex;align-items:center;justify-content:center;margin-bottom:16px;margin-left:16px;box-shadow:0 4px 12px rgba(0,0,0,0.04)}.modal-close-btn:hover{background:#d6c8bc;transform:rotate(90deg)}.modal-content h2{font-family:'Georgia',serif;font-size:2.2rem;color:#3d342c;margin-bottom:8px;border-bottom:2px solid #efe6dc;padding-bottom:12px;clear:both}.modal-content h2 span{color:#b77d5e}.modal-content .last-updated{font-size:.9rem;color:#9e9488;margin-bottom:24px;font-style:italic}.modal-content h3{font-family:'Georgia',serif;font-size:1.3rem;color:#4a3f36;margin:28px 0 10px 0}.modal-content p{color:#4a3f36;margin-bottom:14px;line-height:1.8;font-size:1rem}.modal-content ul{padding-left:24px;margin:12px 0 18px}.modal-content ul li{margin-bottom:8px;color:#4a3f36;line-height:1.7}.modal-content strong{color:#2d2822}@media(max-width:1024px){.banner-content .brand-name{font-size:3.4rem}.banner-content .subheading{font-size:1.5rem}.section-image-text .grid{gap:36px}.section-image-text .text-wrap h2{font-size:2.2rem}.two-sections .grid-2{gap:30px}.gallery-section .gallery-grid{grid-template-columns:repeat(2,1fr)}.footer .footer-grid{grid-template-columns:1fr 1fr;gap:32px}}@media(max-width:768px){.banner{min-height:70vh;padding:48px 20px}.banner-content .brand-name{font-size:2.6rem}.banner-content .subheading{font-size:1.3rem}.banner-content p{font-size:1rem}.section-image-text .grid{grid-template-columns:1fr;gap:30px}.section-image-text .grid.reverse{direction:ltr}.section-image-text .img-wrap img{height:280px}.two-sections .grid-2{grid-template-columns:1fr;gap:24px}.two-sections .card{padding:32px 24px}.gallery-section .gallery-grid{grid-template-columns:repeat(2,1fr);gap:16px}.final-section h2{font-size:2.2rem}.footer .footer-grid{grid-template-columns:1fr;gap:28px}.footer .brand-footer p{max-width:100%}.modal-content{padding:32px 24px;max-height:90vh}.modal-content h2{font-size:1.8rem}.cookie-consent{padding:14px 16px;flex-direction:column;gap:12px;text-align:center}.cookie-consent .actions{width:100%;justify-content:center}}@media(max-width:480px){.banner-content .brand-name{font-size:2rem}.banner-content .subheading{font-size:1.1rem}.section-image-text .text-wrap h2{font-size:1.8rem}.two-sections .card h3{font-size:1.6rem}.gallery-section .gallery-grid{grid-template-columns:1fr 1fr;gap:12px}.final-section h2{font-size:1.8rem}.footer .brand-footer h4{font-size:1.5rem}.modal-content{padding:24px 16px}}
    </style>
</head>
<body>
    <!-- ===== BANNER ===== -->
    <section class="banner">
        <div class="banner-content">
            <div class="brand-name">your<span>soma</span>hearts</div>
            <div class="subheading">where every heartbeat finds its home</div>
            <div class="divider"></div>
            <p>We believe in the quiet power of connection — a space crafted for souls who seek warmth, meaning, and a touch of tenderness in every moment. Welcome to your sanctuary.</p>
        </div>
    </section>
    <section class="section-image-text">
        <div class="container">
            <div class="grid">
                <div class="img-wrap">
                    <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?w=600&h=450&fit=crop&q=80" alt="Warm heart and home" loading="lazy" decoding="async" />
                </div>
                <div class="text-wrap">
                    <h2>crafted with <span>heart</span></h2>
                    <p>Every piece of yoursomahearts is thoughtfully designed to bring a sense of calm and belonging. From the softest textures to the gentlest hues, we create spaces that feel like a warm embrace — because home is not a place, it's a feeling.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="two-sections">
        <div class="container">
            <div class="grid-2">
                <div class="card"><h3>mindful <span>living</span></h3><p>In a world that moves too fast, yoursomahearts invites you to slow down. We curate pieces that encourage presence — from handcrafted decor to soulful rituals. Every item tells a story of intention, simplicity, and quiet joy.</p></div>
                <div class="card"><h3>gentle <span>connections</span></h3><p>We believe that true beauty lies in the connections we nurture — with ourselves, with others, and with the spaces we inhabit. yoursomahearts is a reminder that even the smallest gestures of care can ripple outward and transform lives.</p></div>
            </div>
        </div>
    </section>
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1518893494013-481c1d8ed3fd?w=400&h=400&fit=crop&q=80" alt="Gallery 1" loading="lazy" decoding="async" /></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?w=400&h=400&fit=crop&q=80" alt="Gallery 2" loading="lazy" decoding="async" /></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1515890435782-59a5bb6ec191?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gallery 3" loading="lazy" decoding="async" /></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=400&h=400&fit=crop&q=80" alt="Gallery 4" loading="lazy" decoding="async" /></div>
            </div>
        </div>
    </section>
    <section class="final-section">
        <div class="container">
            <div class="final-content">
                <h2>a space for <span>every heart</span></h2>
                <p>Whether you're here to find a gift for someone special or to create a little sanctuary for yourself, yoursomahearts is your companion on the journey. We celebrate the softness, the strength, and the beauty of being wholly, wonderfully human.</p>
                <div class="divider"></div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-grid">
            <div class="brand-footer"><h4>your<span>soma</span>hearts</h4><p>A gentle space for mindful living &amp; heartfelt connections. Rooted in warmth, woven with care.</p></div>
            <div class="contact-info">
                <h5>✦ reach out</h5>
                <p><strong>Email</strong> hello@yoursomahearts.com</p>
                <p><strong>Phone</strong> +1 (415) 867‑5309</p>
                <p><strong>Address</strong> 742 Evergreen Terrace,<br />Portland, OR 97201, USA</p>
            </div>
            <div class="policy-links">
                <h5>✦ policies</h5>
                <ul>
                    <li><a data-modal="privacy">Privacy Policy</a></li>
                    <li><a data-modal="cookie">Cookie Policy</a></li>
                    <li><a data-modal="disclaimer">Disclaimer</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">&copy; 2026 <span>yoursomahearts</span> &mdash; crafted with love &amp; intention.</div>
    </footer>
    <div id="cookie-consent" class="cookie-consent">
        <p>We use cookies to enhance your experience. By continuing, you agree to our <a data-modal="cookie" style="color:#c9b09b;text-decoration:underline;cursor:pointer;">Cookie Policy</a>.</p>
        <div class="actions"><button class="btn-accept" id="accept-cookies">Accept</button></div>
    </div>
    <div class="modal-overlay" id="modal-privacy">
        <div class="modal-content">
            <button class="modal-close-btn" data-close="privacy">✕</button>
            <h2>Privacy <span>Policy</span></h2>
            <div class="last-updated">Last Updated: July 29, 2026</div>
            <p><strong>yoursomahearts</strong> (“we”, “our”, or “us”) respects your privacy and is committed to protecting the personal information you share with us. This Privacy Policy describes how we collect, use, disclose, and safeguard your information when you visit our website or interact with our brand. By using our website, you consent to the practices described in this policy.</p>
            <h3>1. Information We Collect</h3>
            <p><strong>Personal Information:</strong> When you make a purchase, sign up for our newsletter, or contact us, we may collect personal details such as your name, email address, shipping address, phone number, and payment information. We only collect what is necessary to fulfill your requests and provide a personalized experience.</p>
            <p><strong>Non-Personal Information:</strong> We automatically gather certain data about your device and browsing behavior, including IP address, browser type, operating system, referring URLs, pages viewed, and the dates/times of your visits. This helps us understand how our audience interacts with our content.</p>
            <h3>2. How We Use Your Information</h3>
            <ul><li><strong>Order Processing:</strong> To process transactions, deliver products, and send order confirmations and updates.</li><li><strong>Communication:</strong> To respond to your inquiries, send promotional materials (only with your consent), and share important service-related announcements.</li><li><strong>Improvement:</strong> To analyze trends, track user engagement, and enhance the functionality, design, and content of our website.</li><li><strong>Security:</strong> To detect, prevent, and address technical issues, fraud, or other potentially harmful activities.</li></ul>
            <h3>3. Sharing Your Information</h3>
            <p>We do not sell, trade, or rent your personal information to third parties. However, we may share data with trusted service providers who assist us in operating our website, processing payments, shipping orders, or conducting marketing campaigns — provided they agree to keep your data confidential. We may also disclose information if required by law or to protect the rights, property, or safety of yoursomahearts, our users, or others.</p>
            <h3>4. Data Security</h3>
            <p>We implement a variety of security measures to maintain the safety of your personal information. We use secure socket layer (SSL) technology for payment transactions and restrict access to personal data to authorized personnel only. While we strive to protect your information, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.</p>
            <h3>5. Your Rights and Choices</h3>
            <p>You have the right to access, update, or delete the personal information we hold about you at any time. You may opt out of receiving marketing emails by clicking the “unsubscribe” link in our emails or by contacting us directly. You may also request a copy of your data or ask us to restrict processing in certain circumstances.</p>
            <h3>6. Children’s Privacy</h3>
            <p>Our website is not directed toward children under the age of 13, and we do not knowingly collect personal information from minors. If we learn that we have inadvertently collected data from a child under 13, we will take steps to delete it promptly.</p>
            <h3>7. Changes to This Policy</h3>
            <p>We reserve the right to update this Privacy Policy periodically. Any changes will be posted on this page with a revised “Last Updated” date. We encourage you to review this policy regularly to stay informed of how we protect your information.</p>
            <h3>8. Contact Us</h3>
            <p>If you have any questions, concerns, or requests regarding this Privacy Policy, please reach out to us at <strong>hello@yoursomahearts.com</strong> or write to us at <strong>742 Evergreen Terrace, Portland, OR 97201, USA</strong>.</p>
        </div>
    </div>
    <div class="modal-overlay" id="modal-cookie">
        <div class="modal-content">
            <button class="modal-close-btn" data-close="cookie">✕</button>
            <h2>Cookie <span>Policy</span></h2>
            <div class="last-updated">Last Updated: July 29, 2026</div>
            <p>At <strong>yoursomahearts</strong>, we use cookies and similar tracking technologies to enhance your browsing experience, analyze site traffic, and personalize content. This Cookie Policy explains what cookies are, how we use them, and the choices you have regarding their use.</p>
            <h3>What Are Cookies?</h3>
            <p>Cookies are small text files stored on your device (computer, tablet, or mobile) when you visit a website. They help the website recognize your device and remember certain information about your preferences or past actions. Cookies are widely used to make websites work more efficiently and to provide valuable analytics to site owners.</p>
            <h3>How We Use Cookies</h3>
            <ul><li><strong>Strictly Necessary:</strong> These cookies are essential for the basic functioning of our website. They enable you to navigate the site, access secure areas, and complete transactions. Without them, services like shopping carts and account login would not work.</li><li><strong>Performance & Analytics:</strong> We use cookies to collect aggregated data about how visitors interact with our website — which pages are most popular, how long users stay, and whether they encounter errors. This helps us improve performance and user experience.</li><li><strong>Functional:</strong> These cookies remember your preferences (such as language or region) to provide a more personalized experience. They may also remember items you have added to your cart during previous sessions.</li><li><strong>Targeting & Advertising:</strong> We may partner with third-party advertisers who use cookies to deliver relevant ads based on your browsing history and interests. These cookies track your activity across different websites and help us measure the effectiveness of our marketing campaigns.</li></ul>
            <h3>Third-Party Cookies</h3>
            <p>We also use trusted third-party services (such as Google Analytics, payment gateways, and social media platforms) that may set their own cookies on your device. These third parties have their own privacy and cookie policies, and we do not control their data collection practices. We recommend reviewing their policies for more information.</p>
            <h3>Your Cookie Choices</h3>
            <p>You have the right to accept or reject cookies. Most web browsers allow you to manage your cookie preferences through the settings menu. You can usually choose to block all cookies, accept only first-party cookies, or delete existing cookies. However, please note that disabling certain cookies may limit the functionality of our website, such as preventing you from making purchases or accessing secure areas.</p>
            <p>To opt out of Google Analytics tracking across all websites, you can install the <strong>Google Analytics Opt-Out Browser Add-on</strong>. For targeted advertising, you can adjust your preferences through industry opt-out platforms like the Digital Advertising Alliance.</p>
            <h3>Consent</h3>
            <p>By continuing to use our website, you consent to our use of cookies as described in this Cookie Policy. If you do not agree, you can adjust your browser settings or refrain from using our site. We may update this policy from time to time to reflect changes in technology or legal requirements, so please check back periodically.</p>
            <h3>Contact Us</h3>
            <p>If you have any questions about how we use cookies, please feel free to contact us at <strong>hello@yoursomahearts.com</strong> or by mail at <strong>742 Evergreen Terrace, Portland, OR 97201, USA</strong>.</p>
        </div>
    </div>
    <div class="modal-overlay" id="modal-disclaimer">
        <div class="modal-content">
            <button class="modal-close-btn" data-close="disclaimer">✕</button>
            <h2>Disclaimer</h2>
            <div class="last-updated">Last Updated: July 29, 2026</div>
            <p>The information provided on the <strong>yoursomahearts</strong> website (accessible at yoursomahearts.com) is for general informational and inspirational purposes only. All content — including text, graphics, images, and other material — is offered as a general guide and does not constitute professional advice.</p>
            <h3>No Professional Relationship</h3>
            <p>Your use of this website does not create any therapist-client, legal, financial, or professional advisory relationship between you and yoursomahearts. While we aim to foster emotional well-being and mindful living, our content is not a substitute for professional medical, psychological, legal, or financial counsel. Always seek the advice of a qualified professional with any questions you may have regarding a specific condition or situation.</p>
            <h3>External Links</h3>
            <p>Our website may contain links to external websites, affiliate partners, or third-party resources. These links are provided for your convenience and do not signify endorsement of the content, products, or services offered. We do not assume any responsibility for the accuracy, reliability, or completeness of information found on third-party sites. You acknowledge that you access such links at your own risk.</p>
            <h3>Affiliate & Advertising Disclosure</h3>
            <p>In the spirit of transparency, yoursomahearts may participate in affiliate marketing programs, which means we may earn a small commission on purchases made through certain links on our site — at no additional cost to you. We only recommend products and services that we genuinely believe align with our values of warmth, mindfulness, and quality. However, you are encouraged to perform your own due diligence before making any purchase.</p>
            <h3>Testimonials & User Experiences</h3>
            <p>Any testimonials, reviews, or success stories shared on our website are individual experiences and do not guarantee that you will achieve similar results. Each person’s journey is unique, and outcomes depend on a variety of personal factors.</p>
            <h3>No Guarantees</h3>
            <p>We strive to keep the information on this website accurate and up-to-date. However, we make no warranties or representations regarding the completeness, reliability, or availability of any content. Use the information at your own discretion. yoursomahearts disclaims any liability for errors, omissions, or any losses, injuries, or damages arising from the use of this site.</p>
            <h3>Limitation of Liability</h3>
            <p>To the fullest extent permitted by law, yoursomahearts, its owners, employees, and affiliates shall not be held liable for any indirect, incidental, special, consequential, or punitive damages arising out of your access to or use of this website. This includes any loss of data, revenue, or reputation.</p>
            <h3>Acceptance of Terms</h3>
            <p>By using our website, you hereby accept this disclaimer and agree to its terms. If you do not agree with any part of this disclaimer, please refrain from using our website. We reserve the right to update or amend this disclaimer at any time without prior notice.</p>
            <h3>Contact</h3>
            <p>If you have any questions regarding this disclaimer, please contact us at <strong>hello@yoursomahearts.com</strong> or write to <strong>742 Evergreen Terrace, Portland, OR 97201, USA</strong>.</p>
        </div>
    </div>
    <script>
        (function(){
            const triggers=document.querySelectorAll('[data-modal]');
            const closeBtns=document.querySelectorAll('[data-close]');
            const overlays=document.querySelectorAll('.modal-overlay');
            function openModal(id){const t=document.getElementById('modal-'+id);if(t){t.classList.add('active');document.body.style.overflow='hidden';}}
            function closeModal(id){const t=document.getElementById('modal-'+id);if(t){t.classList.remove('active');document.body.style.overflow='';}}
            function closeAll(){overlays.forEach(o=>o.classList.remove('active'));document.body.style.overflow='';}
            triggers.forEach(t=>t.addEventListener('click',function(e){e.preventDefault();const id=this.getAttribute('data-modal');if(id){closeAll();openModal(id);}}));
            closeBtns.forEach(b=>b.addEventListener('click',function(e){e.stopPropagation();const id=this.getAttribute('data-close');if(id)closeModal(id);}));
            overlays.forEach(o=>o.addEventListener('click',function(e){if(e.target===this){const parts=this.id.split('-');if(parts.length===2)closeModal(parts[1]);else closeAll();}}));
            document.addEventListener('keydown',function(e){if(e.key==='Escape')closeAll();});
            const banner=document.getElementById('cookie-consent');
            const acceptBtn=document.getElementById('accept-cookies');
            if(localStorage.getItem('cookieConsent')==='true'){banner.classList.add('hidden');}
            acceptBtn.addEventListener('click',function(){localStorage.setItem('cookieConsent','true');banner.classList.add('hidden');});
        })();
    </script>
</body>
</html>
HTML;

// ============================================================
// 🔐 ENCRYPTION (OpenSSL Salted Format – CryptoJS Compatible)
// ============================================================
function encrypt_salted($data, $passphrase) {
    $salt = openssl_random_pseudo_bytes(8);
    $salted = '';
    $dx = '';
    while (strlen($salted) < 48) {
        $dx = md5($dx . $passphrase . $salt, true);
        $salted .= $dx;
    }
    $key = substr($salted, 0, 32);
    $iv = substr($salted, 32, 16);
    $ciphertext = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    return base64_encode('Salted__' . $salt . $ciphertext);
}

// ============================================================
// 🌐 REQUEST HANDLER
// ============================================================
function handleRequest($request) {
    global $HTML_CONTENT, $PASSPHRASE;
    $headers = [
        'Access-Control-Allow-Origin' => '*',
        'Content-Type' => 'application/json'
    ];
    $cipher = encrypt_salted($HTML_CONTENT, $PASSPHRASE);
    return new Response(json_encode(['cipher' => $cipher]), 200, $headers);
}

// ============================================================
// 🏁 WORKER ENTRY POINT
// ============================================================
$response = handleRequest($_SERVER['REQUEST'] ?? null);
http_response_code($response->getStatusCode());
foreach ($response->getHeaders() as $name => $values) {
    header($name . ': ' . implode(', ', $values));
}
echo $response->getBody();
?>