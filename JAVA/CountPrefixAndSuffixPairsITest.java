/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountPrefixAndSuffixPairsITest {

    @Test
	public void testCountPrefixAndSuffixPairsI() throws Exception {
        //Test 1
        int want = 4;
        int got = CountPrefixAndSuffixPairsI.countPrefixSuffixPairs( new String[]{"a","aba","ababa","aa"} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = CountPrefixAndSuffixPairsI.countPrefixSuffixPairs( new String[]{"pa","papa","ma","mama"} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = CountPrefixAndSuffixPairsI.countPrefixSuffixPairs( new String[]{"abab","ab"} );
        assertEquals(want, got);
	}

}
