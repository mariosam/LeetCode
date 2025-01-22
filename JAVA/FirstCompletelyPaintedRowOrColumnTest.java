/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FirstCompletelyPaintedRowOrColumnTest {

    @Test
	public void testHeightChecker() throws Exception {
        //Test 1
        int want = 2;
        int got = FirstCompletelyPaintedRowOrColumn.firstCompleteIndex( new int[]{1,3,4,2}, new int[][]{{1,4},{2,3}} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = FirstCompletelyPaintedRowOrColumn.firstCompleteIndex( new int[]{2,8,7,4,1,3,5,6,9}, new int[][]{{3,2,5},{1,4,6},{8,7,9}} );
        assertEquals(want, got);
	}

}
