# Magento 2 Facebook Plugin Extension 

**[Magento 2 Facebook Plugin by Mageplaza](http://www.mageplaza.com/magento-2-facebook-plugin/)** helps stores to integrate Facebook page into the shopping sites. **Facebook Plugin extension** creates the convenience for customers to access stores’ information as well as contact stores easily. As a result, the number of followers to the Fan page increases significantly and the conversion rate rises accordingly. 

[![Latest Stable Version](https://poser.pugx.org/mageplaza/module-facebook-plugin/v/stable)](https://packagist.org/packages/mageplaza/module-facebook-plugin)
[![Total Downloads](https://poser.pugx.org/mageplaza/module-facebook-plugin/downloads)](https://packagist.org/packages/mageplaza/module-facebook-plugin)


## 1. Documentation

- [Installation guide](https://www.mageplaza.com/install-magento-2-extension/)
- [User guide](https://docs.mageplaza.com/facebook-plugin/index.html)
- [Introduction page](http://www.mageplaza.com/magento-2-facebook-plugin/)
- [Contribute on Github](https://github.com/mageplaza/magento-2-facebook-plugin)
- [Get Support](https://github.com/mageplaza/magento-2-facebook-plugin/issues)

## 2. FAQ

**Q: I got error: Mageplaza_Core has been already defined**

A: Read solution [here](https://github.com/mageplaza/module-core/issues/3).

**Q: I would like to locate our Fanpage on any places on the sites. Is it possible?**

A: Yes. Please create Facebook Widget from Block section from the backend,  then embed it on any CMS page or block. 

**Q: Which tabs can I add to Facebook Plugin on site?**

A: The tabs can be selected to display including: Timeline, Event and Messages

**Q: Can our customers like or share our Fanpage?**

A: Yes, absolutely. Like button will display automatically.  Share is one type of Call to Action buttons which you can turn on/ turn off from the admin backend. However, please make sure that Share button is already configured in your Fanpage. 

**Q: I want to add comment box on Product Page so our customers to leave questions. How can I do?** 

A: You should enable Facebook comment from the admin backend so that Comment Tab will display on Product Page. Customers will login their Facebook account to leave their questions or feedback easily. Note that this extension is properly compatible with [Social Login](https://www.mageplaza.com/magento-2-social-login-extension/). 

**Q: Can I adjust the size of Facebook Plugin to suit my store size?** 

A: Yes, definitely. From the backend, please set width and height for the plugin. 

## 3. How to install Magento 2 Facebook Plugin extension

Install via composer (recommend)

Run the following command in Magento 2 root folder:
With Marketing Automation (recommend):
```
composer require mageplaza/module-facebook-plugin mageplaza/module-smtp
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

Without Marketing Automation:
```
composer require mageplaza/module-facebook-plugin
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```


## 4. Facebook Plugin Highlight Features

### Integrate Facebook information into store website

![Magento 2 Facebook Plugin extension](https://i.imgur.com/Fyl7n3f.png)

**Mageplaza Facebook Extension** enables the admin to add tabs on Facebook Page on store website with 3 options: **Timeline, Event and Messages**. By embedding **Facebook Feed** on your website, the store owner can display all the latest updates on Timeline, Event, Messages to customers visiting their site.

Each of these 3 tabs takes a specific function:
- **Timeline tab** for all latest news on products and history
- **Event tab** for upcoming events
- **Messages tab** for interacting between store’s admin and visitors.

### Facebook Comments Widget

![Magento 2 Facebook Comments Widget](https://i.imgur.com/l1bc3dY.png)

**Magento 2 Facebook Widget** allows the customer to leave their comment with ease, right on the website’s product page. Right here customers can post their feedback, questions about the product which they are interested in, by using their own Facebook account. This extension is really supportive to the store’s admin, which allows customers who left comments to get Facebook notifications right when the admin respond. 

More amazing, any other visitors can easily see already-answered questions and feedbacks to get more information about the product. It is undeniable that a product page with feedbacks and comments of many customers is likely to be trusted by new visitors. They will feel that the site is well interacting and have tendency to spend more time finding out about the product.

Additionally, the store owner can swiftly manage comments on Facebook by Facebook apps.

### Enable Call-to-action button 

![facebook login3](https://i.imgur.com/tvwt9Kz.png)

To optimize digital advertising, Facebook Extension allows adding Call-to-action button. The button’s name is based on the configuration on Facebook (according to particular campaigns). The possible buttons are **Share, Call Now, Register Now, or Watch Video**. Call-to-action button plays an indispensable role in motivating visitors to take further interaction, which can turn them into real customers. This will significantly contribute to the store revenue.

### Customizable Interface

![facebook login4](https://i.imgur.com/WHjIvFq.png)

The design of Facebook Plugin can be set from the backend. The elements which are possible to customize are: width, height, header. Admin can select to enable/disable cover photo, profile photo and call-to-action button as well.

## 5. More Features

### Comments number limitation

Admin can limit the number of comments which are displayed by Facebook Plugin.

### Insert snippet code to any CMS

Embed snippet code to any CMS block and CMS page on website easily.

### Mobile-friendliness

Facebook Plugin can work well on both Mobile and PC version.

### Extension compatibility 

Customers can access Facebook Plugin with [Magento 2 Social Login Extension](https://github.com/mageplaza/magento-2-social-login). This plugin is compatible with almost third-party module as well

## 6. Full Magento 2 Facebook Widget Features

### For store owners 
- Enable/disable the plugin
- Select the section to be displayed: Timeline, Events and Messages
- Customize width, height for the plugin
- Add Facebook URL, copy/paste Facebook App ID
- Show/hide the cover photo, profile photo, call-to-action button
- Enable/disable small headers
- Embed snippet code to CMS pages of CMS blocks
- Enable/disable/limit Facebook comments
- Set title and width for Comment tab 

### For shoppers
- View timeline of a store’s Fanpage right on the store site
- See the Facebook timeline of a store right on the website
- Get updates of the store’s upcoming Facebook event while visiting the site
- Swiftly communicate with the administrator/ other visitors via Facebook login
- Be noticed right when getting responses from posted comments/ feedbacks

## 7. Facebook Widget User Guide

### Facebook Widget Configuration

To start the configuration, from the Admin Panel, make your way to `Stores > Configuration > Mageplaza Extensions > Facebook Plugin > Configuration`

![facebook login5](https://i.imgur.com/VWCQAWO.png)

### 7.1 General configuration

![facebook login6](https://i.imgur.com/hhLxuYZ.png)

- **Enable**: Select `Yes` to enable the module 
- **Facebook App ID**
  - Input App ID which allows admin to manage Facebook comment on Product Page
  - This field is not allowed to leave blank 

#### Facebook Plugin 

![facebook login7](https://i.imgur.com/HOyG8VX.png)

- **Enable**: Select `Yes` to embed the Facebook Page to Widget

- **Facebook URL**
  - Insert URL of the Facebook Page
  - Be valid with public page
  
- **Tabs**
  - Select tabs which is displayed on Facebook page on site
  - 3 options: Default tab is Timeline
  
- **Width** 
  - Set the width for the Facebook container
  - Default width is 500 px
  - Min. of Length is 70 px
  
- **Hide cover photo**
  - Select `Yes` to hide Facebook cover photo
  - Default value is No 
  
- **Show profile photo**: Select `Yes` to show profile photo of friends who clicked `Like` button on Facebook

- **Hide the custom Call to Action**: Select `Yes` to hide Call to Action button on Facebook (if this button is available on page). For example, Book Now, Call Now, Send Email. If select `No`, the button will be hidden. 

- **Small header** 
  - Select `Yes` to display the header with small size
  - Call to Action button will be hidden 
  
- **Adapt width** 
  - Select `Yes` to adjust Facebook container’s width automatically 
  - Default is `Yes` 
  
- **Snippet Code** 
  - XML File: Copy and paste the code to file format .xml where you want to display Facebook page on the frontend
  - CMS Page, CMS Static Block: Copy and paste the code to the page you want to display  Facebook page outside the frontend
  - Template .phtml file: Copy and paste the code to file template .phtml where you want to display  Facebook page outside the frontend
 
#### Facebook Comment

![facebook login8](https://i.imgur.com/OxEdCnu.png)

- **Enable**: Select `Yes` to enable Facebook Comment function on Product Page 

- **Title**: 
  - Set title for Comment tab 
  - Default title is Facebook Comment 
  
- **Width**
  - Set the width for Comment section container
  - The min. is 320px 
  
- **Number of posts**
  - Set the number of posts to be displayed on 
  - The minimum number is 1
  
### 7.2. Facebook Widget  

#### Add Facebook Widget

- [Step 1: Select the Type](#select-type)
- [Step 2: Complete the Storefront Properties section](#storefront-properties) 
- [Step 3: Configure Widget Options to display Facebook Page ](#configure-widget-option-display-facebook-page)

#### Step 1: Select the Type {#select-type}

- On the Admin Panel, go to `Content > Elements > Widgets`
- In the upper-right corner of **Widgets** workplace, click on `Add Widget` button
- In the **Settings** section
  - Choose `CMS Static Block` type in the **Type** box.
  - Choose the current theme you are applying in the **Design Theme**.
  - Click `Continue` button.
  
  ![facebook login9](https://i.imgur.com/43cGgVD.png)

#### Step 2: Complete the Storefront Properties section {#storefront-properties}

In the Storefront Properties section,
  - Enter `Widget Title` for the internal reference.
  - Assign the block to all store views in the `Assign to Store View` field or to any store view you want to apply the block.
  - Set the `Sort Order` if many blocks are placed at the same container. The block is at the top if the inserted value is zero.

![facebook login10](https://i.imgur.com/NKavYvP.png)

In the Layout Updates section, click on `Layout Update` to set the layout.

- Choose the `category`, `product`, or `page` where shows the block in the `Display on` field.
- If set to a specific page, you need to choose Page you want to the block to display and set Container that is the position of the page the block appears.

![facebook login11](https://i.imgur.com/DgXy1x7.png)

#### Step 3: Configure Widget Options to display Facebook Page {#configure-widget-option-display-facebook-page}

- **Facebook Widget options**

![facebook login12](https://i.imgur.com/7z9M9Kl.png)

  - `Facebook Widget options = Use Config`: Use configuration set in Configuration section 
  - `Facebook Widget options = Custom`: Admin customizes configuration 

![facebook login13](https://i.imgur.com/at1QvUD.png)

- **Facebook URL**
  - Insert URL of the Facebook Page
  - Be valid with public page
  
- **Tabs**
  - Select tabs which is displayed on Facebook page on site
  - 3 options: Timeline, Event, Messages
  - Default tab is Timeline
  
- **Width** 
  - Set the width for the Facebook container
  - Default width is 500 px
  - Min. of Length is 70 px
  
- **Hide cover photo**
  - Select `Yes` to hide Facebook cover photo
  - Default value is No 
  
- **Show profile photo**: Select `Yes` to show profile photo of friends who clicked “Like” button on Facebook

- **Hide the custom Call to Action**: Select `Yes` to hide Call to Action button on Facebook ( if this button is available on page). For example, Book Now, Call Now, Send Email. If select `No`, the button will be hidden.

- **Small header** 
  - Select `Yes` to display the header with small size
  - Call to Action button will be hidden 
  
- **Adapt width** 
  - Select `Yes` to adjust Facebook container’s width automatically 
  - Default is `Yes` 
  
- **Snippet Code** 
  - **XML File**: Copy and paste the code to file format .xml where you want to display Facebook page on the frontend
  - **CMS Page, CMS Static Block**: Copy and paste the code to the page you want to display  Facebook page outside the frontend
  - **Template .phtml file**: Copy and paste the code to file template .phtml where you want to display  Facebook page outside the frontend

### 7.3. Frontend

- Display Facebook Page

![facebook login14](https://i.imgur.com/HYTsLhE.png) 

- Display Facebook Comment on Product Page

![facebook login15](https://i.imgur.com/2HOOC4f.png)

- Manage comments on Facebook App 

![facebook login16](https://i.imgur.com/9hrVjbR.png)


**People also search:**
- magento 2 facebook widget
- magento 2 facebook plugin
- magento 2 facebook comments widget
- magento 2 facebook feed plugin
- magento 2 facebook widget plugin
- magento 2 facebook events widget
- magento facebook extension
- magento 2 facebook page feed widget


**Other free extension on Github**
- [Magento 2 social login](https://github.com/mageplaza/magento-2-social-login)
- [Magento 2 social share](https://github.com/mageplaza/magento-2-social-share)
- [Magento 2 Delete Orders](https://github.com/mageplaza/magento-2-delete-orders)
- [Magento 2 GDPR Compliance](https://github.com/mageplaza/magento-2-gdpr)
- [Magento 2 login as customers](https://github.com/mageplaza/magento-2-login-as-customer)
- [Magento 2 seo](https://github.com/mageplaza/magento-2-seo)
- [Magento 2 Free Layered Navigation](https://github.com/mageplaza/magento-2-ajax-layered-navigation)
- [Magento 2 security](https://github.com/mageplaza/magento-2-security)

**Explore more [Magento 2 extension on Marketplace](https://marketplace.magento.com/partner/Mageplaza):**
- [Magento 2 Delivery Time](https://marketplace.magento.com/mageplaza-module-delivery-time.html)
- [Magento 2 Promo Bar](https://marketplace.magento.com/mageplaza-module-promo-bar.html)
- [Magento 2 Same Order Number](https://marketplace.magento.com/mageplaza-module-same-order-number.html)
- [Magento 2 Multi Flat Rates](https://marketplace.magento.com/mageplaza-module-multi-flat-rates.html)
- [Magento 2 Social Share](https://marketplace.magento.com/mageplaza-module-social-share.html)
- [Magento 2 Instagram Feed](https://marketplace.magento.com/mageplaza-module-instagram-feed.html)
- [Magento 2 Quick Cart](https://marketplace.magento.com/mageplaza-module-quick-cart.html)
- [Magento 2 Import Export CMS](https://marketplace.magento.com/mageplaza-module-import-export-cms.html)
- [Magento 2 Promo Bar](https://marketplace.magento.com/mageplaza-module-promo-bar.html)
- [Magento 2 Mass Product Actions](https://marketplace.magento.com/mageplaza-module-mass-product-actions.html)
