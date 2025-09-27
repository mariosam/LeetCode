/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import org.junit.Test;

public class TriangleTest {

    @Test
	public void testTriangle() throws Exception {
        //Test 1
        int want = 11;
        List<List<Integer>> triangle = new ArrayList<>();
        triangle.add(Arrays.asList(2));
        triangle.add(Arrays.asList(3, 4));
        triangle.add(Arrays.asList(6, 5, 7));
        triangle.add(Arrays.asList(4, 1, 8, 3));
        int got = Triangle.minimumTotal( triangle );
        assertEquals(want, got);
        //Test 2
        want = -10;
        triangle = new ArrayList<>();
        triangle.add(Arrays.asList(-10));
        got = Triangle.minimumTotal( triangle );
        assertEquals(want, got);
	}

}
