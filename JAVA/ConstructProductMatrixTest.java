/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertTrue;

import java.util.Arrays;

import org.junit.Test;

public class ConstructProductMatrixTest {

    @Test
	public void testConstructProductMatrix() throws Exception {
        // Test 1
        int[][] want = {{24,12},{8,6}};
        int[][] got = ConstructProductMatrix.constructProductMatrix(
            new int[][]{{1,2},{3,4}}
        );
        assertTrue(Arrays.deepEquals(want, got));

        // Test 2
        want = new int[][]{{2},{0},{0}};
        got = ConstructProductMatrix.constructProductMatrix(
            new int[][]{{12345},{2},{1}}
        );
        assertTrue(Arrays.deepEquals(want, got));
	}

}
