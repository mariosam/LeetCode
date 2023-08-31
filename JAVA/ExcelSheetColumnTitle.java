/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ExcelSheetColumnTitle {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", convertToTitle( 2 ));
    }

    public static String convertToTitle(int columnNumber) {
        StringBuilder str = new StringBuilder();
        while (columnNumber > 0) {
            int tem = columnNumber % 26;
            tem = tem != 0 ? tem + 64 : 90;
            str.insert(0, (char) tem);
            if (columnNumber % 26 == 0) {
                columnNumber--;
            }
            columnNumber /= 26;
        }
        return str.toString();
    }
}
