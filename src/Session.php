<?php
namespace Enaylal;

class Session
{
    public function __construct()
    {
        $this->start();
    }

    public function start()
    {
        if (!headers_sent() && !$this->checkStart()) {
            session_start();
        }
    }

    public function checkStart()
    {
        return (!(session_status() === PHP_SESSION_NONE));
    }

    public function check($case)
    {
        $this->start();
        return (isset($_SESSION[$case]));
    }

    public function get($case)
    {
        if ($this->check($case)) {
            return $_SESSION[$case];
        }
        return null;
    }

    public function set($case, $nouvelleValeur)
    {
        $this->start();
        $_SESSION[$case] = $nouvelleValeur;
    }

    public function remove($case)
    {
        if ($this->check($case)) {
            unset($_SESSION[$case]);
        }
    }

    public function reset()
    {
        $this->start();
        unset($_SESSION);
        session_destroy();

        $this->start();
    }
}
