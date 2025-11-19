import turtle as tur
tur.speed(2)
tur.width(2)
def relatitve_pos(x,y):
    tur.penup()
    tur.goto(tur.pos()+(x,y))
    tur.pendown()
tur.begin_fill()
tur.color("#ffab00")
for i in range(4):
    tur.forward(100)
    tur.circle(100,90)
tur.end_fill()
relatitve_pos(140,70)
tur.seth(90)
tur.color("#000")
tur.begin_fill()
for i in range(3):
    if(i==1):
        tur.forward(169.71)
    else:
        tur.forward(120)
    tur.circle(10,135)
tur.end_fill()
relatitve_pos(-180,40)
tur.seth(90)
tur.width(20)
for i in range(4):
    tur.forward(60)
    if(i==1):
        tur.left(90)
    else:
        tur.right(90)
tur.hideturtle()
tur.done()