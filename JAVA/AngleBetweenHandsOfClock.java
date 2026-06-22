/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class AngleBetweenHandsOfClock {

    public static void main(String[] args) {
        System.out.printf("Resultado: %f\n", angleClock(12, 30));
    }

    public static double angleClock(int hour, int minutes) {
        double minAngle = minutes * 360 / 60;
        double hourAnglePart1 = hour != 12 ? (hour * 360) / 12 : 0;
        double hourAnglePart2 = (double) (30 * minutes) / (double) 60;
        double hourAngle = hourAnglePart1 + hourAnglePart2;
        double preResult = Math.abs(minAngle - (hourAngle));

        return preResult > 180 ? 360 - preResult : preResult;
    }

}
