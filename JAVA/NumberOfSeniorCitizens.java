/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfSeniorCitizens {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countSeniors( new String[]{"7868190130M7522","5303914400F9211","9273338290F4010"} ));
    }

    public static int countSeniors(String[] details) {
        int num = 0;
        for (int i = 0; i < details.length; i++) {
            int age = Integer.parseInt(details[i].substring(11, 13));
            if (age > 60) {
                num++;
            }
        }
        return num;
    }

}
