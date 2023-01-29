# Shape Corners Count
This package outputs the number of corners of a shape. 

It can be used like this:
```php
use Klaklaklakl/ShapeCornersCount/ShapeCornersCount;

ShapeCornersCount::getCornersCount('rhombus');
// Will be displayed:
// rhombus - 4

// You can transfer any number of shapes:
ShapeCornersCount::getCornersCount('circle', 'triangle', 'ellipse');
// circle - 0
// triangle - 3
// ellipse - 0

// In the case of an unknown figure, a corresponding message will be displayed:
ShapeCornersCount::getCornersCount('lalala');
// lalala - not defined
```

Реализовано для фигур:
- circle;
- triangle;
- ellipse;
- rhombus;
- square;
- rectangle;
- point;
- plane;
- line;
- trapezoids;
- pentagon.