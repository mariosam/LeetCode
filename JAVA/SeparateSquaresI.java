/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Comparator;
import java.util.List;

public class SeparateSquaresI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", separateSquares( new int[][]{{0,0,1},{2,2,1}} ));
    }

    public static double separateSquares(int[][] squares) {
        final double halfArea =
            Arrays.stream(squares).mapToDouble(square -> Math.pow(square[2], 2)).sum() / 2;
        List<int[]> events = new ArrayList<>();

        for (int[] square : squares) {
        final int y = square[1];
        final int l = square[2];
        events.add(new int[] {y, 1, l});     // start of square
        events.add(new int[] {y + l, 0, l}); // end of square
        }

        events.sort(Comparator.comparingInt(event -> event[0]));

        double area = 0;
        int width = 0;
        int prevY = 0;

        for (int[] event : events) {
        final int y = event[0];
        final int l = event[2];
        final double areaGain = width * (long) (y - prevY);
        if (area + areaGain >= halfArea)
            return prevY + (halfArea - area) / width;
        area += areaGain;
        width += (event[1] == 1) ? l : -l;
        prevY = y;
        }

        throw new IllegalArgumentException();
    }

}
