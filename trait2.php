<?php
trait traitOne
{
    public function show()
    {
        echo "trait one";
    }
}
trait traitTwo
{
    public function show()
    {
        echo "trait two";
    }
}

class Abc
{
    use TraitOne, TraitTwo {
        TraitOne::show insteadof TraitTwo; // Use TraitOne's `show` method
        TraitTwo::show as showTraitTwo;   // Alias TraitTwo's `show` method
    }
}

$abc = new Abc();
$abc->show();
$abc->showTraitTwo();
