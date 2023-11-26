/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class KthSymbolinGrammarTest {

    @Test
	public void testKthSymbolinGrammar() throws Exception {
        //Test 1
        int want = 0;
        int got = KthSymbolinGrammar.kthGrammar( 1, 1 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = KthSymbolinGrammar.kthGrammar( 2, 1 );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = KthSymbolinGrammar.kthGrammar( 2, 2 );
        assertEquals(want, got);
	}

}
