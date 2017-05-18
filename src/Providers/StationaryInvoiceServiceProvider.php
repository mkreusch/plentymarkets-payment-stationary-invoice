<?php
 
namespace StationaryInvoice\Providers;
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Modules\Payment\Events\Checkout\ExecutePayment;
use Plenty\Modules\Payment\Events\Checkout\GetPaymentMethodContent;
use Plenty\Modules\Basket\Events\Basket\AfterBasketCreate;
use Plenty\Modules\Basket\Events\Basket\AfterBasketChanged;
use Plenty\Modules\Basket\Events\BasketItem\AfterBasketItemAdd;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;
use StationaryInvoice\Helper\StationaryInvoiceHelper;
 
/**
 * Class StationaryInvoiceServiceProvider
 * @package StationaryInvoice\Providers
 */
class StationaryInvoiceServiceProvider extends ServiceProvider
{
    public function register()
    {
 
    }
 
    /**
     * Boot additional services for the payment method
     *
     * @param StationaryInvoiceHelper $paymentHelper
     * @param PaymentMethodContainer $payContainer
     * @param Dispatcher $eventDispatcher
     */
    public function boot( StationaryInvoiceHelper $paymentHelper,
                          PaymentMethodContainer $payContainer,
                          Dispatcher $eventDispatcher)
    {
        // Create the ID of the payment method if it doesn't exist yet
        $paymentHelper->createMopIfNotExists();

   }
}
