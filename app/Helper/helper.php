<?php

function setPayType($choose_payment) {
    Session::put('payment_type', $choose_payment);
}
