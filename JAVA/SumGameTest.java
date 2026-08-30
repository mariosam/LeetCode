/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SumGameTest {

    @Test
	public void testSumGame() throws Exception {
        //Test 1
        boolean want = false;
        boolean got = SumGame.sumGame( "5023" );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = SumGame.sumGame( "25??" );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = SumGame.sumGame( "?3295???" );
        assertEquals(want, got);
	}

}
