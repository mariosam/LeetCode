/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountPartitionsWithEvenSumDifferenceTest {

    @Test
	public void testCountPartitionsWithEvenSumDifference() throws Exception {
        //Test 1
        int want = 4;
        int got = CountPartitionsWithEvenSumDifference.countPartitions( new int[]{10,10,3,7,6} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = CountPartitionsWithEvenSumDifference.countPartitions( new int[]{1,2,2} );
        assertEquals(want, got);
        //Test 3
        want = 3;
        got = CountPartitionsWithEvenSumDifference.countPartitions( new int[]{2,4,6,8} );
        assertEquals(want, got);
	}

}
