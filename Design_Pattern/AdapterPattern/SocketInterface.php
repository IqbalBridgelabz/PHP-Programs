<?php
/**
 * interface Adapter to create abstract function which is inherit and implements in respective class
 */
interface Adapter
{
    public function get120Volts();
    public function get3Volts();
    public function get12Volts();
}

/**
 * socket adapter class which ast as a adptetr between mobile and socket
 */
class SocketAdapter extends Socket implements Adapter
{
    /**
     * method overridden to give 120 volts
     */
    public function get120Volts()
    {
        return $this->getVolts();
    }

    /**
     * function to get 3 volts output
     */
    public function get3Volts()
    {
        return $this->getVolts()/40;
    }

    /**
     * function to get 12 volts output
     */
    public function get12Volts()
    {
        return $this->getVolts()/10;
    }
}
?>