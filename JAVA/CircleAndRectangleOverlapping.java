/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CircleAndRectangleOverlapping {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", checkOverlap( 1, 0, 0, 1, -1, 3, 1 ));
    }

    public static boolean checkOverlap(int radius, int xCenter, int yCenter, int x1, int y1, int x2, int y2) {
        double res = 0;
        if (xCenter < x1 || xCenter > x2) {
            res += Math.min(Math.pow(x1 - xCenter, 2), Math.pow(xCenter - x2, 2));
        }
        if (yCenter < y1 || yCenter > y2) {
            res += Math.min(Math.pow(y1 - yCenter, 2), Math.pow(yCenter - y2, 2));
        }
        return res <= radius * radius;
    }

}
