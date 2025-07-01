/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfSubsequencesThatSatisfyTheGivenSumConditionTest {

    @Test
	public void testNumberOfSubsequencesThatSatisfyTheGivenSumCondition() throws Exception {
        //Test 1
        int want = 4;
        int got = NumberOfSubsequencesThatSatisfyTheGivenSumCondition.numSubseq( new int[]{3,5,6,7}, 9 );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got = NumberOfSubsequencesThatSatisfyTheGivenSumCondition.numSubseq( new int[]{3,3,6,8}, 10 );
        assertEquals(want, got);
        //Test 3
        want = 61;
        got = NumberOfSubsequencesThatSatisfyTheGivenSumCondition.numSubseq( new int[]{2,3,3,4,6,7}, 12 );
        assertEquals(want, got);
	}

}
