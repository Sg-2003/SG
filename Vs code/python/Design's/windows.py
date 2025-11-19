import turtle as w 

w.hideturtle()
w.speed(1)
w.bgcolor('black')
w.penup()
w.goto(-50,60)
w.pendown()
w.color('blue')
w.begin_fill()
w.goto(100,100)
w.goto(100,-100)

#Draw windows
w.goto(-50,-60)
w.goto(-50,60)
w.end_fill()
w.color('black')
w.goto(15,100)

#cut 2 equal parts
w.color('black')
w.width(10)
w.goto(15,-150)
w.penup()
w.goto(100,0)
w.pendown()
w.goto(-100,0)
w.goto(30,-180)
w.color('blue')
w.write("Windows", font=("cooper",50,"bold"),align="center")
w.done()