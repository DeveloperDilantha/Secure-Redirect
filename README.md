# Secure Redirect - Boost Web Traffic!
Use this secure redirect script to increase your web traffic.
Version: 1.0

# Who can use this?

1) Digital marketers
2) Traffic resellers
3) Advertising agencies
4) Everyone who wants web traffic!

# The problem:

Let's say you have an advertising agency and your customer needs you to advertise their websites with you. You get paid for promoting their websites, and they will keep monitoring your work using their traffic analytics programs such as Google Analytics, Facebook Pixels, and similar. Some people also use URL Shorteners like sh.st, bit.ly, bu.lk, axm.am, etc. Somehow, your customers will be really unhappy with your work, if they cannot see the results on their analytics.

Nowadays web traffic trackers are not able to track your visitors 100% correctly. Due to privacy issues, incognito modes, ISP firewalls, and other similar modern securities, some of your visitors will not be tracked as you want. Even though a real visitor lands on the targeted page, this visit will not be counted by traffic trackers. Simply, your advertising works, but tracking has the problem.

# Solution

This is the solution to track all your traffic securely by yourself. And prove your customers that your advertising is real. You just have to put this small PHP file in the root folder of your official website and redirect all advertised traffic through it. Every visit you send to your customer’s website will have your official domain name as the referrer, therefore the customer cannot argue that your service is incomplete.


# How to use this script?

Step 01: Download “secured_redirect.php” PHP file.

Just download the “secured_redirect.php” file in this distribution to your computer. This PHP file can be edited using any Code Editor program such as Brackets, NotePad++, etc.

Step 02: Upload it to your server.

Let's say your official website name is, www.YOUR_DOMAIN.com. You have to upload this PHP file into your main root. If you have set it well, you will be able to open it like, 

https://www.YOUR_DOMAIN.com/secured_redirect.php 

Step 03: Start redirecting.

The final method is to start redirecting using our tool. To do that, You have to create your redirect pattern like this. 

https://www.YOUR_DOMAIN.com/secured_redirect.php?key=YOUR_TOKEN_KEY&url=YOUR_URL

Just try to understand the pattern above. ?key=MY_TOKEN_KEY&url=MY_URL will instruct our PHP script to redirect to the url you add here. However, it will not work without a valid key.

Confused? The key is a token (secret code) that works as an access key. We need it to avoid third-party people using this redirect tool, And you can change these access keys (token codes) as shown in another section on this page.

Lastly, create the full redirect url by following the above pattern. Here is an example:

https://www.dilantha.org/secured_redirect.php?key=Dilantha1998&url=https://www.rndvn.com

Once you have set up all, you can start advertising your customer's websites using our new redirect url and it will always show the referrer as your website's domain name. It will be the best way to prove to your customers that your promotion is real. It also improves your website's ranking automatically when more customers do advertising.

# How to secure redirects with access keys (tokens) ?

Just open the above “secured_redirect.php” PHP file using any code editor and find the PHP array like below.

$access_keys = array(
    "MY_TOKEN_KEY",
    "YOUR_NEW_KEY",
    "Dilantha1998"    
);

Inside the array(), you can see tokens keys which we have configured in default. You can rename them with your own keys, or add more keys for future use.

