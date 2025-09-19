<?php 
    class Subscription
    {
        public function __construct(
            protected BillingPortal $billingPortal,
        ) {}
    }

    class BillableSubscription extends Subscription
    {
        protected function getStripeCustomer()
        {
            //
        }

        protected function getStripeSubscription()
        {
            //
        }
    }

    trait Billable
    {
        protected function getStripeCustomer()
        {
            //
            echo "getStripeCustomer";
        }

        protected function getStripeSubscription()
        {
            //
        }
    }

    class getStripeSubscription
    {
        use Billable;
    }

    class StripeBillingPortal implements BillingPortal
    {
        public function getCostumer() {}
        public function getSubscription() {}
    }

    interface BillingPortal
    {
        public function getCostumer();
        public function getSubscription();
    }
?>