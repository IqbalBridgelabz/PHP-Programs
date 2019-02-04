<?php
/**
 * The Subject owns some important state and notifies observers when the state
 * changes.
 */
class Subject implements SplSubject
{
    /**
     * @var int For the sake of simplicity, the Subject's state, essential to
     * all subscribers, is stored in this variable.
     */
    public $state;

    /**
     * @var array List of subscribers. In real life, the list of subscribers can
     * be stored more comprehensively (categorized by event type, etc.).
     */
    private $observers = [];

    /**
     * The subscription management methods.
     */
    public function attach(SplObserver $observer)
    {
        echo "Subject: Attached an observer.\n";
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        foreach ($this->observers as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$key]);
                echo "Subject: Detached an observer.\n";
            }
        }
    }

    /**
     * Trigger an update in each subscriber.
     */
    public function notify()
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Usually, the subscription logic is only a fraction of what a Subject can
     * really do. Subjects commonly hold some important business logic, that
     * triggers a notification method whenever something important is about to
     * happen (or after it).
     */
    public function someBusinessLogic()
    {
        echo "\nSubject: I'm doing something important.\n";
        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}\n";
        $this->notify();
    }
}

/**
 * Concrete Observers react to the updates issued by the Subject they had been
 * attached to.
 */
class ConcreteObserverA implements SplObserver
{
    public function update(SplSubject $subject)
    {
        if (! $subject instanceof Subject) {
            return;
        }

        if ($subject->state < 3) {
            echo "ConcreteObserverA: Reacted to the event.\n";
        }
    }
}

class ConcreteObserverB implements SplObserver
{
    public function update(SplSubject $subject)
    {
        if (! $subject instanceof Subject) {
            return;
        }

        if ($subject->state == 0 || $subject->state >= 2) {
            echo "ConcreteObserverB: Reacted to the event.\n";
        }
    }
}

$subject = new Subject; // creating an object of subject class

$o1 = new ConcreteObserverA;    // creating an object of ConcreteObserverA class
$subject->attach($o1);

$o2 = new ConcreteObserverB;    // creating an object of ConcreteObserverB class
$subject->attach($o2);

$subject->someBusinessLogic();
// $subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();
?>