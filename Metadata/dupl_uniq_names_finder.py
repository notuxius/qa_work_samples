ft1_uniq_lines = set()
ft2_uniq_lines = set()

with open('file_test1.csv') as ft1:
    # Skip the first line
    ft1.readline()

    print("Duplicate lines in 'file_test1.csv' file:")

    for line in ft1:
        # Remove trailing newlines
        line = line.rstrip()

        if line in sorted(ft1_uniq_lines):
            print(line)
        else:
            ft1_uniq_lines.add(line)

        ft1_uniq_lines.add(line)

    print()

with open('file_test2.csv') as ft2:
    # Skip the first line
    ft2.readline()

    print("Duplicate lines in 'file_test1.csv' and 'file_test2.csv' files:")

    for line in ft2:
        # Remove trailing newlines
        line = line.rstrip()

        ft2_uniq_lines.add(line)

        if line in sorted(ft1_uniq_lines):
            print(line)

    print()

with open('file_test2.csv') as ft2:
    # Skip the first line
    ft2.readline()

    print("Unique lines in 'file_test2.csv' file:")

    for line in ft2:
        # Remove trailing newlines
        line = line.rstrip()

        if line not in sorted(ft1_uniq_lines):
            print(line)

    print()

# Same result in Bash with 'comm -3 <(sort file_test1.csv | uniq) <(sort file_test2.csv | uniq)' command

print("Unique lines in 'file_test1.csv' file:")

for line in sorted(ft1_uniq_lines):
    if line not in sorted(ft2_uniq_lines):
        print(line)
