# ean13-barcode
barcode generator based on timestamp


The check digit for an EAN-13 code is calculated as follows:

1.Count digit positions from the left to the right, starting at 1.

2.Sum all the digits in odd positions. (In the example shown in Figure 1, this is 9 + 8 + 5 + 1 + 2 + 5 = 30 – note that the final 5 is not included since this is the check digit, which is what we are currently trying to calculate.)

3.Sum all the digits in even positions and multiply the result by 3. (In the example, this is (7 + 0 + 2 + 4 + 5 + 7) × 3 = 75.)

4.Add the results of step 2 and step 3, and take just the final digit (the ‘units’ digit) of the answer. This is equivalent to taking the answer modulo-10. (In the example, the sum is 30 + 75 = 105, so the units digit is 5.)

5.If the answer to step 4 was 0, this is the check digit. Otherwise the check digit is given by ten minus the answer from step 4. (In the example, this is 10 – 5 = 5.)

6.The check digit is appended to the right of the 12 identification digits. The check digit can have any value from 0 to 9.
