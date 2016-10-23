<?php

/* AppBundle:Checkout:cart.html.twig */
class __TwigTemplate_55ebdf9db62e2a68fe0103c08a3e02f98d41d8f2a6c5bfadbd6fb267bfa07287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Checkout:cart.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AppBundle:Checkout:cart";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<main class=\"checkout-page\"></main>
<h2 class=\"checkout-page__title title__level2\">Checkout: cart page</h2>
<section class=\"checkout-page__collect-data\">
\t<div class=\"checkout-page__left\">
\t\t<!-- FORM START-->
\t\t<form action=\"\" class=\"checkout-page__delivery-address data\">
\t\t\t<!-- DELIVERY ADDRESS PART START-->
\t\t\t<h2 class=\"checkout-page__title title__level2\">Delivery Address</h2>
\t\t\t<label for=\"firstname\" class=\"data__input-label\">First name</label>
\t\t\t<input type=\"text\" name=\"firstname\" id=\"firstname\" class=\"data__input-text\" required pattern=\"[A-Za-z]+\" title=\"Upper and lowercase letters only\">
\t\t\t<label for=\"lastname\" class=\"data__input-label\">Last name</label>
\t\t\t<input type=\"text\" name=\"lastname\" id=\"lastname\" class=\"data__input-text\" required pattern=\"[A-Za-z]+\" title=\"Upper and lowercase letters only\">
\t\t\t<label for=\"email\" class=\"data__input-label\">E-mail</label>
\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"data__input-text\" required>
\t\t\t<label for=\"phone\" class=\"data__input-label--not-required\">Phone</label>
\t\t\t<input type=\"text\" name=\"phone\" id=\"phone\" class=\"data__input-text\">
\t\t\t<label for=\"address\" class=\"data__input-label\">Address</label>
\t\t\t<input type=\"text\" name=\"address\" id=\"address\" class=\"data__input-text\" required>
\t\t\t<label for=\"addresscont\" class=\"data__input-label--not-required\">Address cont…</label>
\t\t\t<input type=\"text\" name=\"addresscont\" id=\"addresscont\" class=\"data__input-text\">
\t\t\t<label for=\"zipcode\" class=\"data__input-label\">Zip code</label>
\t\t\t<input type=\"text\" name=\"zipcode\" id=\"zipcode\" class=\"data__input-text\" required>
\t\t\t<label for=\"city\" class=\"data__input-label\">City</label>
\t\t\t<input type=\"text\" name=\"city\" id=\"city\" class=\"data__input-text\" required pattern=\"[A-Za-z]+\" title=\"Upper and lowercase letters only\">
\t\t\t<label for=\"state\" class=\"data__input-label\">State</label>
\t\t\t<input type=\"text\" name=\"state\" id=\"state\" class=\"data__input-text\" required pattern=\"[A-Za-z]+\" title=\"Upper and lowercase letters only\">
\t\t\t<label for=\"country\" class=\"data__input-label\">Country</label>
\t\t\t<select name=\"country\" id=\"country\" class=\"data__dropdown-select\" required>
\t\t\t\t<option class=\"data__dropdown-value\" value=\"usa\">United States</option>
\t\t\t\t<option class=\"data__dropdown-value\" value=\"uk\">United Kingdom</option>
\t\t\t\t<option class=\"data__dropdown-value\" value=\"pl\">Poland</option>
\t\t\t\t<option class=\"data__dropdown-value\" value=\"ca\">Canada</option>
\t\t\t</select>
\t\t\t<!-- DELIVERY ADDRESS PART END-->
\t\t\t<!-- PAYMENT PART START-->
\t\t\t<h2 class=\"checkout-page__title title__level2\">Payment</h2>
\t\t\t<label for=\"cardnumber\" class=\"data__input-label\">Card number</label>
\t\t\t<input type=\"text\" pattern=\"\\d{8}\" name=\"cardnumber\" id=\"cardnumber\" class=\"data__input-text\" required title=\"eight digits\">
\t\t\t<label for=\"cardholder\" class=\"data__input-label\">Card holder</label>
\t\t\t<input type=\"text\" name=\"cardholder\" id=\"cardholder\" class=\"data__input-text\" required pattern=\"[A-Za-z]+\" title=\"Upper and lowercase letters only\">
\t\t\t<label for=\"cvc\" class=\"data__input-label\">Cvc</label>
\t\t\t<input type=\"text\" pattern=\"\\d{3}\" name=\"cvc\" id=\"cvc\" class=\"data__input-text\" required title=\"three digits\">
\t\t\t<button class=data__button--disabled>Checkout</button>
\t\t\t<!-- PAYMENT PART END-->
\t\t</form>
\t\t<!-- FORM END-->
\t</div>
\t<div class=\"checkout-page__right\">
\t\t<!-- ORDER SUMMARY START-->
\t\t<section class=\"checkout-page__order\">
\t\t\t<!-- SINGLE PRODUCT START-->
\t\t\t<div class=\"product\">
\t\t\t\t<div class=\"product__details\">
\t\t\t\t\t<h2 class=\"product__name\">Acme product</h2>
\t\t\t\t\t<div class=\"product__detail\">
\t\t\t\t\t\t<span class=\"product__detail-label\">Qty</span><span class=\"product__detail-value\">1</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__detail\">
\t\t\t\t\t\t<span class=\"product__detail-label\">Price</span><span class=\"product__detail-value\">\$00</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"product__thumbnail\">
\t\t\t\t\t<img src=\"\" alt=\"\" class=\"product__image\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- SINGLE PRODUCT END -->
\t\t\t<hr class=\"checkout-page__separator\">
\t\t\t<div class=\"checkout-page__order-summary\">
\t\t\t\t<div class=\"checkout-page__summary-detail\">
\t\t\t\t\t<span class=\"checkout-page__summary-detail-label\">Subtotal</span><span class=\"checkout-page__summary-detail-value\">\$00,000</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"checkout-page__summary-detail\">
\t\t\t\t\t<span class=\"checkout-page__summary-detail-label\">Tax</span><span class=\"checkout-page__summary-detail-value\">\$00</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"checkout-page__summary-detail\">
\t\t\t\t\t<span class=\"checkout-page__summary-detail-label\">Shipping</span><span class=\"checkout-page__summary-detail-value\">\$00</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"checkout-page__summary-detail\">
\t\t\t\t\t<span class=\"checkout-page__summary-detail-label title__level2\">Total</span><span class=\"checkout-page__summary-detail-value\">\$00,000</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ORDER SUMMARY END-->
\t</div>

</section>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:Checkout:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Checkout:cart{% endblock %}*/
/* */
/* {% block body %}*/
/* <main class="checkout-page"></main>*/
/* <h2 class="checkout-page__title title__level2">Checkout: cart page</h2>*/
/* <section class="checkout-page__collect-data">*/
/* 	<div class="checkout-page__left">*/
/* 		<!-- FORM START-->*/
/* 		<form action="" class="checkout-page__delivery-address data">*/
/* 			<!-- DELIVERY ADDRESS PART START-->*/
/* 			<h2 class="checkout-page__title title__level2">Delivery Address</h2>*/
/* 			<label for="firstname" class="data__input-label">First name</label>*/
/* 			<input type="text" name="firstname" id="firstname" class="data__input-text" required pattern="[A-Za-z]+" title="Upper and lowercase letters only">*/
/* 			<label for="lastname" class="data__input-label">Last name</label>*/
/* 			<input type="text" name="lastname" id="lastname" class="data__input-text" required pattern="[A-Za-z]+" title="Upper and lowercase letters only">*/
/* 			<label for="email" class="data__input-label">E-mail</label>*/
/* 			<input type="email" name="email" id="email" class="data__input-text" required>*/
/* 			<label for="phone" class="data__input-label--not-required">Phone</label>*/
/* 			<input type="text" name="phone" id="phone" class="data__input-text">*/
/* 			<label for="address" class="data__input-label">Address</label>*/
/* 			<input type="text" name="address" id="address" class="data__input-text" required>*/
/* 			<label for="addresscont" class="data__input-label--not-required">Address cont…</label>*/
/* 			<input type="text" name="addresscont" id="addresscont" class="data__input-text">*/
/* 			<label for="zipcode" class="data__input-label">Zip code</label>*/
/* 			<input type="text" name="zipcode" id="zipcode" class="data__input-text" required>*/
/* 			<label for="city" class="data__input-label">City</label>*/
/* 			<input type="text" name="city" id="city" class="data__input-text" required pattern="[A-Za-z]+" title="Upper and lowercase letters only">*/
/* 			<label for="state" class="data__input-label">State</label>*/
/* 			<input type="text" name="state" id="state" class="data__input-text" required pattern="[A-Za-z]+" title="Upper and lowercase letters only">*/
/* 			<label for="country" class="data__input-label">Country</label>*/
/* 			<select name="country" id="country" class="data__dropdown-select" required>*/
/* 				<option class="data__dropdown-value" value="usa">United States</option>*/
/* 				<option class="data__dropdown-value" value="uk">United Kingdom</option>*/
/* 				<option class="data__dropdown-value" value="pl">Poland</option>*/
/* 				<option class="data__dropdown-value" value="ca">Canada</option>*/
/* 			</select>*/
/* 			<!-- DELIVERY ADDRESS PART END-->*/
/* 			<!-- PAYMENT PART START-->*/
/* 			<h2 class="checkout-page__title title__level2">Payment</h2>*/
/* 			<label for="cardnumber" class="data__input-label">Card number</label>*/
/* 			<input type="text" pattern="\d{8}" name="cardnumber" id="cardnumber" class="data__input-text" required title="eight digits">*/
/* 			<label for="cardholder" class="data__input-label">Card holder</label>*/
/* 			<input type="text" name="cardholder" id="cardholder" class="data__input-text" required pattern="[A-Za-z]+" title="Upper and lowercase letters only">*/
/* 			<label for="cvc" class="data__input-label">Cvc</label>*/
/* 			<input type="text" pattern="\d{3}" name="cvc" id="cvc" class="data__input-text" required title="three digits">*/
/* 			<button class=data__button--disabled>Checkout</button>*/
/* 			<!-- PAYMENT PART END-->*/
/* 		</form>*/
/* 		<!-- FORM END-->*/
/* 	</div>*/
/* 	<div class="checkout-page__right">*/
/* 		<!-- ORDER SUMMARY START-->*/
/* 		<section class="checkout-page__order">*/
/* 			<!-- SINGLE PRODUCT START-->*/
/* 			<div class="product">*/
/* 				<div class="product__details">*/
/* 					<h2 class="product__name">Acme product</h2>*/
/* 					<div class="product__detail">*/
/* 						<span class="product__detail-label">Qty</span><span class="product__detail-value">1</span>*/
/* 					</div>*/
/* 					<div class="product__detail">*/
/* 						<span class="product__detail-label">Price</span><span class="product__detail-value">$00</span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="product__thumbnail">*/
/* 					<img src="" alt="" class="product__image">*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- SINGLE PRODUCT END -->*/
/* 			<hr class="checkout-page__separator">*/
/* 			<div class="checkout-page__order-summary">*/
/* 				<div class="checkout-page__summary-detail">*/
/* 					<span class="checkout-page__summary-detail-label">Subtotal</span><span class="checkout-page__summary-detail-value">$00,000</span>*/
/* 				</div>*/
/* 				<div class="checkout-page__summary-detail">*/
/* 					<span class="checkout-page__summary-detail-label">Tax</span><span class="checkout-page__summary-detail-value">$00</span>*/
/* 				</div>*/
/* 				<div class="checkout-page__summary-detail">*/
/* 					<span class="checkout-page__summary-detail-label">Shipping</span><span class="checkout-page__summary-detail-value">$00</span>*/
/* 				</div>*/
/* 				<div class="checkout-page__summary-detail">*/
/* 					<span class="checkout-page__summary-detail-label title__level2">Total</span><span class="checkout-page__summary-detail-value">$00,000</span>*/
/* 				</div>*/
/* 			</div>*/
/* 		</section>*/
/* 		<!-- ORDER SUMMARY END-->*/
/* 	</div>*/
/* */
/* </section>*/
/* */
/* */
/* {% endblock %}*/
/* */
