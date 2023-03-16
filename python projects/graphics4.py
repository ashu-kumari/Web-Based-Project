import turtle
turtle.speed(0)
colors =['red','orange','yellow','green','blue','indigo','violet']
turtle.penup()
turtle.goto(0,0)
turtle.pendown()
for i in range(200):
    turtle.pencolor(colors[i% len(colors)])
    turtle.width(i/100+1)
    turtle.forward(i)
    turtle.left(59)

turtle.done()