primaryColors = frozenset(["green", "red", "blue"])

color = "green"
# color = "yellow"

if color.lower() in primaryColors:
    print(color + " is a primary color.")
else:
    print(color + " is not a primary color.")
