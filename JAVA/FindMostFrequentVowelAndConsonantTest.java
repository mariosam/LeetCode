/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindMostFrequentVowelAndConsonantTest {

    @Test
	public void testFindMostFrequentVowelAndConsonant() throws Exception {
        //Test 1
        long want = 6;
        long got = FindMostFrequentVowelAndConsonant.maxFreqSum( "successes" );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = FindMostFrequentVowelAndConsonant.maxFreqSum( "aeiaeia" );
        assertEquals(want, got);
	}

}
