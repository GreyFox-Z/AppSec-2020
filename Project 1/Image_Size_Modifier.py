#!/usr/bin/python3

# Module and Library
from PIL import Image
import argparse
import sys
import re


# image resize function:
def image_resize(image, input_file):
    size = image.size
    (width, height) = size
    if width == height:
        new_size = width
    elif width < height:
        new_size = width
    else:
        new_size = height

    new_image = image.resize((new_size, new_size))
    stringlist = re.findall(r'(.*?)\.', input_file)
    filename = "".join(stringlist)
    new_filename = filename + '_modified.jpg'
    new_image.save(new_filename)

    return new_filename


# Parser creation
parser = argparse.ArgumentParser(
    prog='Image Size Modifier',
    usage='%(prog)s [options] image',
    description='Resize an image to a square'
)

# Add the arguments
parser.add_argument(
    'image',
    metavar='image',
    type=str,
    help='Provide the image file name'
)
# Execute the parse_args() method
args = parser.parse_args()

try:
    input_file = args.image
    image = Image.open(input_file)
    newfile_name = image_resize(image, input_file)
    print("Completed...")
    print("The modified Image could be found as " + newfile_name)

except SyntaxError:
    print('[Fatal Error] Syntax Error')
    sys.exit()

except FileNotFoundError:
    print('[Fatal Error] Please input the proper file name')
    sys.exit()