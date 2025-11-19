import turtle as m

m.bgcolor('black')

def first_box():
    m.goto(-130,0)
    m.color('red')
    m.begin_fill()
    for i in range(4):
        m.forward(100)
        m.left(90)
    m.end_fill()
    m.penup()

def second_box():
    m.goto(0,0)
    m.color('green')
    m.begin_fill()
    m.pendown()
    for i in range(4):
        m.forward(100)
        m.left(90)
    m.end_fill()
    m.penup()

def third_box():
    m.goto(-130,-130)
    m.color('blue')
    m.begin_fill()
    m.pendown()
    for i in range(4):
        m.forward(100)
        m.left(90)
    m.end_fill()
    m.penup()    

def fourth_box():
    m.goto(0,-130)
    m.color('orange')
    m.begin_fill()
    m.pendown()
    for i in range(4):
        m.forward(100)
        m.left(90)
    m.end_fill()

print(first_box())
print(second_box())
print(third_box())
print(fourth_box())