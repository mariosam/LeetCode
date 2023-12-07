/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountOfMatchesInTournamentTest {

    @Test
	public void testCountOfMatchesInTournament() throws Exception {
        //Test 1
        long want = 6;
        long got = CountOfMatchesInTournament.numberOfMatches( 7 );
        assertEquals(want, got);
        //Test 2
        want = 13;
        got = CountOfMatchesInTournament.numberOfMatches( 14 );
        assertEquals(want, got);
	}

}
