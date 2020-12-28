import config
import snake
import food
import score
import os


def end_screen():
    background(150)
    fill(255)
    textSize(64)
    text(config.GAME_OVER_MESSAGE, config.WINDOW_WIDTH / 2 - len(config.GAME_OVER_MESSAGE) *17, config.WINDOW_HEIGHT / 2)
    if score.score > score.highscore:
        text(config.HIGH_SCORE_MESSAGE, config.WINDOW_WIDTH / 2 - len(config.HIGH_SCORE_MESSAGE) *17, config.WINDOW_HEIGHT / 2 + 70)


def setup():
    
    size(config.WINDOW_WIDTH, config.WINDOW_HEIGHT)
    frameRate(10)
    if os.path.exists(config.HIGHSCORE_FILE_PATH):
        with open(config.HIGHSCORE_FILE_PATH, "r") as file:
            score.highscore = int(file.read())
    
    food.food_image = loadImage("images/apple.png")
    
def draw():
    background(13, 13, 13)
    snake.show()
    snake.move()
    food.show()
    score.show()
    
    if snake.touches_food():
        snake.eat_food()
        food.reset()
        score.increase()
        
    if snake.eats_self():
        print("GAME OVER")
        end_screen()
        score.update_highscore()
        noLoop()
        
def keyPressed():
    if keyCode == RIGHT and config.CURRENT_DIR != "left":
        config.CURRENT_DIR = "right"
    elif keyCode == LEFT and config.CURRENT_DIR != "right":
        config.CURRENT_DIR = "left"
    elif keyCode == UP and config.CURRENT_DIR != "down":
        config.CURRENT_DIR = "up"
    elif keyCode == DOWN and config.CURRENT_DIR != "up":
        config.CURRENT_DIR = "down"
