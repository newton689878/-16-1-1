import math

def calculate_y(x):
    # Проверка на допустимость значения x для arcsin
    if (abs(x) < math.inf):
        arcsin_arg = math.sqrt(abs(x)) / math.sqrt(abs(x) + 1)
        y_value = (math.asin(arcsin_arg) ** 5) + (abs(x)**(2/5) + 1) + math.log2(2**(math.sin(x)) + abs(x))
        return y_value
    else:
        raise ValueError("x is out of bounds for calculation.")

def is_in_domain(x, y):
    return math.sqrt(x**2 + y**2) <= 5

def main():
    try:
        x = float(input("Введите значение x: "))
        y = calculate_y(x)
        
        print(f"y({x}) = {y}")
        if is_in_domain(x, y):
            print("True")  # Точка принадлежит области D
        else:
            print("False")  # Точка не принадлежит области D
    except ValueError as e:
        print("Ошибка:", e)

if __name__ == "__main__":
    main()