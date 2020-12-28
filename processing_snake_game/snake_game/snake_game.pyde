import config
import snake


def setup():
    size(config.WINDOW_WIDTH, config.WINDOW_HEIGHT)

def draw():
    background(13, 13, 13)
    
    for segment in snake.snake_pos:
        fill (255)
        rect(segment[0], segment[1], config.SCALE, config.SCALE)
    
    
