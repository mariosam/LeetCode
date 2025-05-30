/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DivisibleAndNonDivisibleSumsDifferenceTest {

    @Test
	public void testDetermineIfTwoStringsAreClose() throws Exception {
        //Test 1
        int want = 19;
        int got = DivisibleAndNonDivisibleSumsDifference.differenceOfSums( 10, 3 );
        assertEquals(want, got);
        //Test 2
        want = 15;
        got = DivisibleAndNonDivisibleSumsDifference.differenceOfSums( 5, 6 );
        assertEquals(want, got);
        //Test 3
        want = -15;
        got = DivisibleAndNonDivisibleSumsDifference.differenceOfSums( 5, 1 );
        assertEquals(want, got);
	}

}
