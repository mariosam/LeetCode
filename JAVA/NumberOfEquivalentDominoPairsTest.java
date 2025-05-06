/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfEquivalentDominoPairsTest {

    @Test
	public void testNumberOfEquivalentDominoPairs() throws Exception {
        //Test 1
        int want = 1;
        int got = NumberOfEquivalentDominoPairs.numEquivDominoPairs( new int[][]{{1,2},{2,1},{3,4},{5,6}} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = NumberOfEquivalentDominoPairs.numEquivDominoPairs( new int[][]{{1,2},{1,2},{1,1},{1,2},{2,2}} );
        assertEquals(want, got);
	}

}
