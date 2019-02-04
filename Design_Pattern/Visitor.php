<?php
/**
 * The Component interface declares an `accept` method that should take the base
 * visitor interface as an argument.
 */
interface Component
{
    public function accept(Visitor $visitor);
}
/**
 * Each Concrete Component must implement the `accept` method in such a way that
 * it calls the visitor's method corresponding to the component's class.
 */
class ConcreteComponentA implements Component
{
    /**
     * we're calling `visitConcreteComponentA`, which matches the
     * current class name. This way we let the visitor know the class of the
     * component it works with.
     */
    public function accept(Visitor $visitor)
    {
        $visitor->visitConcreteComponentA($this);
    }

    /**
     * The Visitor is able to use these methods
     * since it's aware of the component's concrete class.
     */
    public function exclusiveMethodOfConcreteComponentA()
    {
        return "A";
    }
}

class ConcreteComponentB implements Component
{
    /**
     * Same here: visitConcreteComponentB => ConcreteComponentB
     */
    public function accept(Visitor $visitor)
    {
        $visitor->visitConcreteComponentB($this);
    }

    public function specialMethodOfConcreteComponentB()
    {
        return "B";
    }
}

/**
 * The Visitor Interface declares a set of visiting methods that correspond to
 * component classes.
 */
interface Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element);

    public function visitConcreteComponentB(ConcreteComponentB $element);
}

/**
 * Concrete Visitors implement several versions of the same algorithm, which can
 * work with all concrete component classes.
 */
class ConcreteVisitor1 implements Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element)
    {
        echo $element->exclusiveMethodOfConcreteComponentA()." --> Visitor1\n";
    }

    public function visitConcreteComponentB(ConcreteComponentB $element)
    {
        echo $element->specialMethodOfConcreteComponentB()." --> Visitor1\n";
    }
}

class ConcreteVisitor2 implements Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element)
    {
        echo $element->exclusiveMethodOfConcreteComponentA()." --> Visitor2\n";
    }

    public function visitConcreteComponentB(ConcreteComponentB $element)
    {
        echo $element->specialMethodOfConcreteComponentB()." --> Visitor2\n";
    }
}

/**
 * The client code can run visitor operations over any set of elements without
 * figuring out their concrete classes. 
 */
function clientCode(array $components, Visitor $visitor)
{
 
    foreach ($components as $component) {
        $component->accept($visitor);
    }
  
}

$components = [
    new ConcreteComponentA,
    new ConcreteComponentB,
];

echo "The client code works with all visitors via the base Visitor interface:\n";
$visitor1 = new ConcreteVisitor1;
clientCode($components, $visitor1);
echo "\n";

echo "It allows the same client code to work with different types of visitors:\n";
$visitor2 = new ConcreteVisitor2;
clientCode($components, $visitor2);
?>